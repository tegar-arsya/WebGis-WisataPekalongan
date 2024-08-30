<?php

namespace App\Http\Livewire;

use App\Models\Akhir as ModelsPotensi;
use Livewire\Component;
use App\Models\Wisata;
use App\Models\Kategori;
use App\Models\Review;
class HalamanUser extends Component
{
    public $wisata_id, $pemiliklahan_id, $kategori_id, $potensi_id;
    public $nama_wisata, $nama_kategori, $tahun, $images, $nama_reviewer, $ulasan, $rating;
    public $reviews = [];
    public $selectedWisata = null;
    protected $kategoris, $wisata, $sum_luas_tanah, $petas;
    protected $rules = [
        'nama_reviewer' => 'required|min:3',
        'ulasan' => 'required|min:10',
        'rating' => 'required|integer|min:1|max:5',
    ];
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
            // Sum of wisata_id, assuming it's used for some calculation
        // $this->sum_luas_tanah = ModelsPotensi::sum('wisata_id');

        // Fetch potensi data joined with wisata and kategori
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
    public function openModalWithReviews($id)
    {
        $this->wisata_id = $id;
        $this->reviews = Review::where('wisata_id', $id)->get();
        $this->emit('openModal');
    }

    public function submitReview()
    {
        $this->validate();

        Review::create([
            'wisata_id' => $this->wisata_id,
            'nama_reviewer' => $this->nama_reviewer,
            'ulasan' => $this->ulasan,
            'rating' => $this->rating,
        ]);

        $this->reset(['nama_reviewer', 'ulasan', 'rating']);
        $this->reviews = Review::where('wisata_id', $this->wisata_id)->get();
        $this->emit('reviewSubmitted');
    }
}
