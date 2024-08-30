<?php

// namespace App\Http\Livewire;

// use Livewire\Component;
// use Livewire\WithPagination;
// use App\Models\Akhir as ModelsPotensi;
// use App\Models\Wisata;
// use App\Models\Kategori;
// use App\Models\Review;
// use Illuminate\Support\Facades\DB;

// class ReviewController extends Component
// {
    // use WithPagination;
    // protected $paginationTheme = 'bootstrap';

    // public $search = '';
    // public $perPage = 5;

    // public $wisata_id,  $nama_reviewer, $ulasan, $rating, $review_id;
    // public $wisatas;
    // public $kategoris,$potensi ;
    // public $isTambah = false;
    // public $isUpdate = false;

    // public function mount()
    // {
    //     $this->wisatas = Wisata::all();
    //     $this->kategoris = Kategori::all();
    //     $this->potensi = ModelsPotensi::all();
    // }

    // protected $rules = [
    //     'wisata_id' => 'required',
    //     'nama_reviewer' => 'required',
    //     'ulasan' => 'required',
    //     'rating' => 'required',
    // ];

    // public function render()
    // {
    //     $reviews = Review::join('wisata', 'wisata.id', '=', 'review.wisata_id')
    //         ->select('review.*', 'wisata.nama_wisata')
    //         ->where(function($query) {
    //             $query->where('wisata.nama_wisata', 'like', '%' . $this->search . '%');
    //         })
    //         ->paginate($this->perPage);

    //     return view('livewire.halaman-user', [
    //         'reviews' => $reviews,
    //         'wisatas' => $this->wisatas,
    //         'kategoris' => $this->kategoris
    //     ])
    //     ->extends('layouts.user')
    //     ->section('content');
    // }



    // public function resetInputFields()
    // {
    //     $this->reset(['wisata_id', 'nama_reviewer', 'ulasan', 'ranting',  'review_id']);
    // }

    // public function reviewId($id)
    // {
    //     $this->isUpdate = true;
    //     $reviews = Review::findOrFail($id);
    //     $this->review_id = $id;
    //     $this->wisata_id = $reviews->wisata_id;
    //     $this->nama_reviewer = $reviews->nama_reviewer;
    //     $this->ulasan = $reviews->ulasan;
    //     $this->rating = $reviews->rating;
    // }

    // public function tambah()
    // {
    //     $this->resetInputFields();
    //     $this->isTambah = true;
    // }

    // public function store()
    // {
    //     $this->validate();

    //     DB::beginTransaction();
    //     try {
    //         Review::create([
    //             'wisata_id' => $this->wisata_id,
    //             'nama_reviewer' => $this->nama_reviewer,
    //             'ulasan' => $this->ulasan,
    //             'rating' => $this->rating,
    //         ]);
    //         DB::commit();
    //         session()->flash('message', 'Data Berhasil Ditambahkan');
    //         $this->resetInputFields();
    //         $this->isTambah = false;
    //     } catch (\Exception $e) {
    //         DB::rollback();
    //         session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }
    // }


    // public function delete($id)
    // {
    //     DB::beginTransaction();
    //     try {
    //         Review::findOrFail($id)->delete();
    //         DB::commit();
    //         session()->flash('message', 'Data Berhasil Dihapus');
    //     } catch (\Exception $e) {
    //         DB::rollback();
    //         session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }
    // }

// }
