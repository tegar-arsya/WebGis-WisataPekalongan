<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\akhir as ModelsPotensi;
use App\Models\Desa as ModelsDesa;
use App\Models\Kecamatan as ModelsKecamatan;
use App\Models\Kategori as ModelsKategori;
use App\Models\Wisata as ModelsWisata;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Log;
class Laporan extends Component
{
    public $tahun, $kategori, $wisata;
    protected $laporans, $wisatas, $kategoris;

    public function render()
    {
        $this->laporans = ModelsPotensi::join('wisata', 'wisata.id', '=', 'potensi_wisata.wisata_id')
        ->join('kategori', 'kategori.id', '=', 'potensi_wisata.kategori_id')
        ->select('potensi_wisata.*', 'wisata.nama_wisata', 'wisata.deskripsi', 'kategori.nama_kategori')
            ->get();

        $this->wisatas = ModelsWisata::where('kategori_id', $this->kategori)->get();
        $this->kategoris= ModelsKategori::all();

        return view('livewire.laporan', [
            'laporans' => $this->laporans,
            'wisatas' => $this->wisatas,
            'kategoris' => $this->kategoris,
        ])->extends('layouts.app')->section('content');
    }

    public function cetakPdf()
{
    \Illuminate\Support\Facades\Log::info('Mencetak PDF dengan parameter:', [
        'tahun' => $this->tahun,
        'kategori' => $this->kategori,
        'wisata' => $this->wisata
    ]);
    
        $petas = ModelsPotensi::join('wisata', 'wisata.id', '=', 'potensi_wisata.wisata_id')
            ->join('kategori', 'kategori.id', '=', 'potensi_wisata.kategori_id')
            ->select('potensi_wisata.*', 'wisata.nama_wisata', 'wisata.luas_wisata', 'kategori.nama_kategori', 'potensi_wisata.latitude', 'potensi_wisata.longitude')
        ->when($this->tahun, function($query) {
            return $query->whereYear('potensi_wisata.created_at', $this->tahun);
        })
        ->when($this->kategori, function($query) {
            return $query->where('wisata.kategori_id', $this->kategori);
        })
        ->when($this->wisata, function($query) {
            return $query->where('wisata_id', $this->wisata);
        })
        
        ->get();

        \Illuminate\Support\Facades\Log::info('Data untuk PDF:', ['petas' => $petas]);

    $pdf = PDF::loadView('livewire.cetakpeta', ['petas' => $petas]);
    // $fileName = date('Y-m-d_H:i:s') . '_cetak_laporan.pdf';
    return response()->stream(
        function () use ($pdf) {
            echo $pdf->output();
        },
        200,
        [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . date('Y-m-d_H:i:s') . '_cetak_laporan.pdf"',
        ]
    );

    
}
public function cetakSemua()
{
    \Illuminate\Support\Facades\Log::info('Mencetak Semua Data PDF');

    $petas = ModelsPotensi::join('wisata', 'wisata.id', '=', 'potensi_wisata.wisata_id')
        ->join('kategori', 'kategori.id', '=', 'potensi_wisata.kategori_id')
        ->select('potensi_wisata.*', 'wisata.nama_wisata', 'wisata.luas_wisata', 'kategori.nama_kategori', 'potensi_wisata.latitude', 'potensi_wisata.longitude')
        ->get();

    \Illuminate\Support\Facades\Log::info('Data Semua untuk PDF:', ['petas' => $petas]);

    $pdf = PDF::loadView('livewire.cetakpeta', ['petas' => $petas]);

    return response()->stream(
        function () use ($pdf) {
            echo $pdf->output();
        },
        200,
        [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . date('Y-m-d_H:i:s') . '_cetak_semua_laporan.pdf"',
        ]
    );
}

}
