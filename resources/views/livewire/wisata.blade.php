<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5>{{ __('Wisata') }}</h5>
                    </div>

                    <div class="card-body">
                        {{-- Tombol Tambah --}}
                        <div class="d-flex justify-content-end mb-3">
                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
                                <i class="bi bi-plus-circle me-2"></i> Tambah Wisata
                            </a>
                        </div>

                        {{-- Tabel --}}
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Wisata</th>
                                                <th>gambar</th>
                                                <th>Kategori</th>
                                                <th>Luas Wisata</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($wisatas as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama_wisata }}</td>
                                                    <td>
                                                        @if ($item->images)
                                                            @foreach (json_decode($item->images) as $image)
                                                                <img src="{{ asset($image) }}" alt="Wisata Image"
                                                                    class="img-thumbnail"
                                                                    style="width: 50px; height: 50px; object-fit: cover;">
                                                            @endforeach
                                                        @else
                                                            <span class="text-muted">No Image</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->kategori }}</td>
                                                    <td>{{ $item->luas_wisata }}</td>
                                                    <td>
                                                        <a href="#" class="btn btn-warning" data-bs-toggle="modal"
                                                            data-bs-target="#editModal"
                                                            wire:click="wisataId({{ $item->id }})">
                                                            <i class="bi bi-pencil-square me-1"></i> Edit
                                                        </a>
                                                        <a href="#" class="btn btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal"
                                                            wire:click="wisataId({{ $item->id }})">
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
                            {{ $wisatas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Add Modal --}}
    <div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Wisata</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="">Nama Wisata</label>
                        <input type="text" class="form-control" wire:model="nama_wisata"
                            placeholder="Masukkan Nama Wisata">
                        @error('nama_wisata')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Upload Gambar</label>
                        <input type="file" class="form-control" wire:model="images" multiple>
                        @error('images.*')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Kategori</label>
                        <select wire:model="kategori_id" class="form-select">
                            <option value="">Pilih Kategori</option>
                            @foreach ($kategoris as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Luas Wisata</label>
                        <input type="text" class="form-control" wire:model="luas_wisata"
                            placeholder="Masukkan Luas Wisata">
                        @error('luas_wisata')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Deskripsi</label>
                        <textarea class="form-control" wire:model="deskripsi" rows="3" placeholder="Masukkan Deskripsi"></textarea>
                        @error('deskripsi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="store()"
                        data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Edit Modal --}}
    <div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title" id="editModalLabel">Edit Wisata</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="">Nama Wisata</label>
                        <input type="text" class="form-control" wire:model="nama_wisata"
                            placeholder="Masukkan Nama Wisata">
                        @error('nama_wisata')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Upload Gambar</label>
                        <input type="file" class="form-control" wire:model="images" multiple>
                        @error('images.*')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Kategori</label>
                        <select wire:model="kategori_id" class="form-select">
                            <option value="">Pilih Kategori</option>
                            @foreach ($kategoris as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Luas Wisata</label>
                        <input type="text" class="form-control" wire:model="luas_wisata"
                            placeholder="Masukkan Luas Wisata">
                        @error('luas_wisata')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Deskripsi</label>
                        <textarea class="form-control" wire:model="deskripsi" rows="3" placeholder="Masukkan Deskripsi"></textarea>
                        @error('deskripsi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="update()"
                        data-bs-dismiss="modal">Update</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Delete Modal --}}
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteModalLabel">Hapus Wisata</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Apakah Anda yakin ingin menghapus wisata ini?</h6>
                    <p><strong>{{ $nama_wisata }}</strong></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" wire:click="destroy()"
                        data-bs-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>

</div>
