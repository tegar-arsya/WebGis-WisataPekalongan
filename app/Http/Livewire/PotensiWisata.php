<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Akhir as ModelsPotensi;
use App\Models\Wisata;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;

class PotensiWisata extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $perPage = 5;

    public $wisata_id, $kategori_id, $deskripsi, $latitude, $longitude, $potensi_id;
    public $wisata;
    public $kategoris;
    public $isTambah = false;
    public $isUpdate = false;

    public function mount()
    {
        $this->wisata = Wisata::all();
        $this->kategoris = Kategori::all();
    }

    protected $rules = [
        'wisata_id' => 'required',
        'kategori_id' => 'required',
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
    ];

    public function render()
    {
        $potensi = ModelsPotensi::join('wisata', 'wisata.id', '=', 'potensi_wisata.wisata_id')
            ->join('kategori', 'kategori.id', '=', 'potensi_wisata.kategori_id')
            ->select('potensi_wisata.*', 'wisata.nama_wisata', 'wisata.deskripsi', 'kategori.nama_kategori')
            ->where(function($query) {
                $query->where('wisata.nama_wisata', 'like', '%' . $this->search . '%')
                    ->orWhere('kategori.nama_kategori', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->perPage);

        return view('livewire.potensi', [
            'potensi' => $potensi,
            'wisata' => $this->wisata,
            'kategoris' => $this->kategoris
        ])
        ->extends('layouts.app')
        ->section('content');
    }

    public function updatedWisataId($value)
    {
        $this->deskripsi = Wisata::find($value)->deskripsi ?? '';
    }

    public function resetInputFields()
    {
        $this->reset(['wisata_id', 'kategori_id', 'deskripsi', 'latitude', 'longitude', 'potensi_id']);
    }

    public function potensiId($id)
    {
        $this->isUpdate = true;
        $potensi = ModelsPotensi::findOrFail($id);
        $this->potensi_id = $id;
        $this->wisata_id = $potensi->wisata_id;
        $this->kategori_id = $potensi->kategori_id;
        $this->deskripsi = $potensi->deskripsi;
        $this->latitude = $potensi->latitude;
        $this->longitude = $potensi->longitude;
        $this->emit('setMarker', $this->latitude, $this->longitude);
    }

    public function tambah()
    {
        $this->resetInputFields();
        $this->isTambah = true;
    }

    public function store()
    {
        $this->validate();

        DB::beginTransaction();
        try {
            ModelsPotensi::create([
                'wisata_id' => $this->wisata_id,
                'kategori_id' => $this->kategori_id,
                'deskripsi' => $this->deskripsi,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
            ]);
            DB::commit();
            session()->flash('message', 'Data Berhasil Ditambahkan');
            $this->resetInputFields();
            $this->isTambah = false;
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function update()
    {
        $this->validate();

        DB::beginTransaction();
        try {
            $potensi = ModelsPotensi::findOrFail($this->potensi_id);
            $potensi->update([
                'wisata_id' => $this->wisata_id,
                'kategori_id' => $this->kategori_id,
                'deskripsi' => $this->deskripsi,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
            ]);
            DB::commit();
            session()->flash('message', 'Data Berhasil Diperbarui');
            $this->resetInputFields();
            $this->isUpdate = false;
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
            ModelsPotensi::findOrFail($id)->delete();
            DB::commit();
            session()->flash('message', 'Data Berhasil Dihapus');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function updateLatLng($lat, $lng)
    {
        $this->latitude = $lat;
        $this->longitude = $lng;
    }
}
