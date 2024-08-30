<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Wisata;
use App\Models\Kategori;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
class WisataComponent extends Component
{
    use WithPagination, WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public $perPage = 10;
    public $nama_wisata, $kategori_id, $luas_wisata, $deskripsi, $wisata_id, $nama_kategori, $kategori;
    public $images = [];
    
    protected $kategoris, $wisatas;

    public function render()
    {
        $wisatas = Wisata::join('kategori', 'wisata.kategori_id', '=', 'kategori.id')
            ->select('wisata.*', 'kategori.nama_kategori')
            ->where('nama_wisata', 'like', '%' . $this->search . '%')
            ->orWhere('nama_kategori', 'like', '%' . $this->search . '%')
            ->paginate($this->perPage);

        $this->kategoris = Kategori::all();

        return view('livewire.wisata', [
            'wisatas' => $wisatas,
            'kategoris' => $this->kategoris,
        ])->extends('layouts.app')->section('content');
    }

    public function resetFields()
    {
        $this->nama_wisata = '';
        $this->kategori_id = '';
        $this->luas_wisata = '';
        $this->deskripsi = '';
        $this->images = [];
        $this->wisata_id = '';
    }

    public function wisataId($id)
    {
        $this->wisata_id = $id;
        $wisata = Wisata::find($id);
        $this->nama_wisata = $wisata->nama_wisata;
        $this->kategori_id = $wisata->kategori_id;
        $this->luas_wisata = $wisata->luas_wisata;
        $this->deskripsi = $wisata->deskripsi;
    }

    public function store()
    {
        $this->validate([
            'nama_wisata' => 'required',
            'kategori_id' => 'required',
            'luas_wisata' => 'required',
            'deskripsi' => 'required',
            'images' => 'array|max:5',
            'images.*' => 'image|max:1024', // Validasi untuk upload gambar
        ]);

        $imagesPath = [];
        if (!empty($this->images)) {
            foreach ($this->images as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('', $filename, 'public_uploads');
                $imagesPath[] = 'wisata-images/' . $filename;
            }
        }

        Wisata::create([
            'nama_wisata' => $this->nama_wisata,
            'kategori_id' => $this->kategori_id,
            'luas_wisata' => $this->luas_wisata,
            'deskripsi' => $this->deskripsi,
            'kategori' => Kategori::find($this->kategori_id)->nama_kategori,
            'images' => json_encode($imagesPath),
        ]);

        session()->flash('message', 'Data Wisata Berhasil Ditambahkan');
        $this->resetFields();
    }

    public function update()
    {
        $this->validate([
            'nama_wisata' => 'required',
            'kategori_id' => 'required',
            'luas_wisata' => 'required',
            'deskripsi' => 'required',
            'images' => 'array|max:5',
            'images.*' => 'image|max:1024', // Validasi untuk upload gambar
        ]);

        if ($this->wisata_id) {
            $wisata = Wisata::find($this->wisata_id);

            // Jika gambar baru diunggah, tambahkan ke database
            $imagesPath = json_decode($wisata->images) ?? [];
            if (!empty($this->images)) {
                foreach ($this->images as $image) {
                    $filename = time() . '_' . $image->getClientOriginalName();
                    $image->storeAs('', $filename, 'public_uploads');
                    $imagesPath[] = 'wisata-images/' . $filename;
                }
            }

            $wisata->update([
                'nama_wisata' => $this->nama_wisata,
                'kategori_id' => $this->kategori_id,
                'luas_wisata' => $this->luas_wisata,
                'deskripsi' => $this->deskripsi,
                'kategori' => Kategori::find($this->kategori_id)->nama_kategori,
                'images' => json_encode($imagesPath),
            ]);

            session()->flash('message', 'Data Wisata Berhasil Diupdate');
            $this->resetFields();
        }
    }

    public function destroy()
    {
        if ($this->wisata_id) {
            $wisata = Wisata::find($this->wisata_id);
    
            // Hapus gambar dari storage
            if (!empty($wisata->images)) {
                foreach (json_decode($wisata->images) as $image) {
                    Storage::disk('public_uploads')->delete($image);
                }
            }
    
            // Hapus data wisata dari database
            $wisata->delete();
    
            session()->flash('message', 'Data Wisata dan Gambar Berhasil Dihapus');
            $this->resetFields();
        }
    }
    
}
