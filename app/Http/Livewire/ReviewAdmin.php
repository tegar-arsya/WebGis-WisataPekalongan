<?php

namespace App\Http\Livewire;

use App\Models\Akhir as ModelsPotensi;
use Livewire\Component;
use App\Models\Wisata;
use App\Models\Kategori;
use App\Models\Review;
class ReviewAdmin extends Component
{
    public $wisata_id, $review_id;
    public $nama_wisata, $nama_reviewer, $ulasan, $rating;
    protected $kategoris, $wisata, $sum_luas_tanah, $petas;

    public function render()
    {
        // Fetch all categories (Informasi Tanah)
        $this->kategoris = Kategori::all();

        // Fetch wisata data joined with its category
        $this->wisata = Wisata::join('kategori', 'wisata.kategori_id', '=', 'kategori.id')
            ->join('potensi_wisata', 'wisata.id', '=', 'potensi_wisata.wisata_id')
            ->select('wisata.*', 'kategori.nama_kategori', 'potensi_wisata.latitude', 'potensi_wisata.longitude')
            ->get();
        // Decode JSON for images if needed
        foreach ($this->wisata as $item) {
            $item->images = json_decode($item->images, true); // Mengubah dari JSON ke array
        }

   
        $this->petas = ModelsPotensi::join('wisata', 'wisata.id', '=', 'potensi_wisata.wisata_id')
        ->join('kategori', 'kategori.id', '=', 'potensi_wisata.kategori_id')
        ->select('potensi_wisata.*', 'wisata.nama_wisata', 'kategori.nama_kategori', 'potensi_wisata.latitude', 'potensi_wisata.longitude')
        ->get();
        
        return view('livewire.halaman-user', [
            'kategoris' => $this->kategoris,
            'wisata' => $this->wisata,
            'sum_luas_tanah' => $this->sum_luas_tanah,
            'petas' => $this->petas,
        ])->extends('layouts.user')->section('content');
    }
    
}
