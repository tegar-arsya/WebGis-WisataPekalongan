<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Potensi Wisata') }}</div>

                    <div class="card-body">
                        {{-- add button --}}
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" wire:click='tambah'>Tambah Data</button>
                            </div>
                        </div>
                        {{-- end add button --}}
                        <br>
                        {{-- perpage --}}
                        <div class="row">
                            <div class="col-md-6">
                                <select wire:model="perPage" class="form-control">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" wire:model="search" class="form-control" placeholder="Search">
                            </div>
                            <div class="col-md-12">
                                {{-- alert --}}
                                @if (session()->has('message'))
                                <div class="alert alert-success mt-3">
                                    {{ session('message') }}
                                </div>
                                @endif
                                @if (session()->has('error'))
                                <div class="alert alert-danger mt-3">
                                    {{ session('error') }}
                                </div>
                                @endif
                                {{-- end alert --}}
                            </div>
                        </div>

                        {{-- table --}}
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Wisata</th>
                                            <th>Kategori</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($potensi as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nama_wisata }}</td>
                                            <td>{{ $item->nama_kategori }}</td>
                                            <td>{{ $item->latitude }}</td>
                                            <td>{{ $item->longitude }}</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm mb-1" wire:click="potensiId({{ $item->id }})">Edit</button>
                                                <button class="btn btn-danger btn-sm" wire:click="delete({{ $item->id }})">Delete</button>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Data Tidak Ditemukan</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            @if($isTambah || $isUpdate)
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="wisata_id">Wisata</label>
                                    <select wire:model="wisata_id" id="wisata_id" class="form-control">
                                        <option value="">Pilih Wisata</option>
                                        @foreach($wisata as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_wisata }}</option>
                                        @endforeach
                                    </select>
                                    @error('wisata_id') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="kategori_id">Kategori</label>
                                    <select wire:model="kategori_id" id="kategori_id" class="form-control">
                                        <option value="">Pilih Kategori</option>
                                        @foreach($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori_id') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea wire:model="deskripsi" id="deskripsi" class="form-control" rows="5" readonly>{{ $deskripsi }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="latitude">Latitude</label>
                                    <input type="text" wire:model="latitude" id="latitude" class="form-control">
                                    @error('latitude') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" wire:model="longitude" id="longitude" class="form-control">
                                    @error('longitude') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group">
                                    <button wire:click="{{ $isTambah ? 'store' : 'update' }}" class="btn btn-success">
                                        {{ $isTambah ? 'Simpan' : 'Update' }}
                                    </button>
                                    <button wire:click="resetInputFields" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                            @endif
                        </div>

                        {{-- pagination --}}
                        <div class="row">
                            <div class="col-md-12">
                                {{ $potensi->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
