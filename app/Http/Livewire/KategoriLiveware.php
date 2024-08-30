<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Kategori;

class KategoriLiveware extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;
    public $perPage = 10;
    protected $queryString = ['search' => ['except' => ''], 'perPage'];

    protected $kategori;
    public function mount()
    {
        $this->kategori = Kategori::paginate($this->perPage);
    }
    public $nama_kategori,$kategori_id;

    public function resetInput()
    {
        $this->nama_kategori = '';
    }
    public function render()
    {
        $this->kategori = Kategori::where('nama_kategori', 'like', '%' . $this->search . '%')->paginate($this->perPage);

        return view('livewire.kategori',[
            'kategori' => $this->kategori,
        ])->extends('layouts.app')->section('content');
    }

    public function store(){
        $this->validate([
            'nama_kategori' => 'required',
        ]);

        Kategori::create([
            'nama_kategori' => $this->nama_kategori,
        ]);

        $this->resetInput();
        $this->emit('KategoriStore');
    }

    public function kategoriId($id){
        $kategori = Kategori::find($id);
        $this->kategori_id = $id;
        $this->nama_kategori = $kategori->nama_kategori;
    }

    public function update(){
        $this->validate([
            'nama_kategori' => 'required',
        ]);

        if($this->kategori_id){
            $kategori = Kategori::find($this->kategori_id);
            $kategori->update([
                'nama_kategori' => $this->nama_kategori,
            ]);
            $this->resetInput();
            $this->emit('kategoriUpdate');
        }
    }

    public function deleteData(){
        if($this->kategori_id){
            Kategori::find($this->kategori_id)->delete();
            $this->emit('kategoriDelete');
        }
    }

}
