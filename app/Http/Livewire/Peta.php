<?php

namespace App\Http\Livewire;

use App\Models\Akhir as ModelsPotensi;
use Livewire\Component;

class Peta extends Component
{
    public $wisata_id, $pemiliklahan_id, $kategori_id, $potensi_id;
    public $nama_wisata,  $nama_kategori, $tahun;

    protected $petas;

    public function render()
    {
        $this->petas = ModelsPotensi::join('wisata', 'wisata.id', '=', 'potensi_wisata.wisata_id')
            ->join('kategori', 'kategori.id', '=', 'potensi_wisata.kategori_id')
            ->select('potensi_wisata.*', 'wisata.nama_wisata', 'kategori.nama_kategori', 'potensi_wisata.latitude', 'potensi_wisata.longitude')
            ->get();

        return view('livewire.peta', [
            'petas' => $this->petas,
        ])->extends('layouts.app')->section('content');
    }
}
