<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5>{{ __('Desa') }}</h5>
                    </div>

                    <div class="card-body">
                        {{-- Add Button --}}
                        <div class="d-flex justify-content-end mb-3">
                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
                                <i class="bi bi-plus-circle me-2"></i> Tambah
                            </a>
                        </div>

                        {{-- Per Page and Search --}}
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <select wire:model="perPage" class="form-select">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" wire:model="search" class="form-control" placeholder="Search...">
                            </div>
                        </div>

                        {{-- Alert Message --}}
                        <div class="row">
                            <div class="col-md-12">
                                @if (session()->has('message'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('message') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                            </div>
                        </div>

                        {{-- Table --}}
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Desa</th>
                                                <th>Kecamatan</th>
                                                <th>Luas Wilayah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($desas as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama_desa }}</td>
                                                    <td>{{ $item->nama_kecamatan }}</td>
                                                    <td>{{ $item->luas_wilayah }}</td>
                                                    <td>
                                                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal" wire:click="desaId({{ $item->id }})">
                                                            <i class="bi bi-pencil-square me-1"></i> Edit
                                                        </a>
                                                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" wire:click="desaId({{ $item->id }})">
                                                            <i class="bi bi-trash me-1"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center text-muted">Data Kosong</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- Pagination --}}
                        <div class="d-flex justify-content-center mt-3">
                            {{ $desas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Add Modal --}}
    <div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Desa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="">Nama Desa</label>
                        <input type="text" class="form-control" wire:model="nama_desa" placeholder="Masukkan Nama Desa">
                        @error('nama_desa') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Kecamatan</label>
                        <select wire:model="kecamatan_id" class="form-select">
                            <option value="">Pilih Kecamatan</option>
                            @foreach ($kecamatans as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_kecamatan }}</option>
                            @endforeach
                        </select>
                        @error('kecamatan_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Luas Wilayah</label>
                        <input type="text" class="form-control" wire:model="luas_wilayah" placeholder="Masukkan Luas Wilayah">
                        @error('luas_wilayah') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="store()" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Edit Modal --}}
    <div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Desa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="">Nama Desa</label>
                        <input type="text" class="form-control" wire:model="nama_desa" placeholder="Masukkan Nama Desa">
                        @error('nama_desa') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Kecamatan</label>
                        <select wire:model="kecamatan_id" class="form-select">
                            <option value="">Pilih Kecamatan</option>
                            @foreach ($kecamatans as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_kecamatan }}</option>
                            @endforeach
                        </select>
                        @error('kecamatan_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Luas Wilayah</label>
                        <input type="text" class="form-control" wire:model="luas_wilayah" placeholder="Masukkan Luas Wilayah">
                        @error('luas_wilayah') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="update()" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Delete Modal --}}
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Desa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Apakah Anda yakin ingin menghapus data ini?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" wire:click="destroy()" data-bs-dismiss="modal">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</div>
