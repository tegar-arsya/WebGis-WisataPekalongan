<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Laporan</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-4">
                            <label for="tahun" class="form-label fw-bold">Tahun</label>
                            <select id="tahun" class="form-select" wire:model="tahun">
                                <option value="">Pilih Tahun</option>
                                @for ($i = 2018; $i < 2026; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            @error('tahun') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="kategori" class="form-label fw-bold">Kategori</label>
                            <select id="kategori" class="form-select" wire:model="kategori">
                                <option value="">Pilih Kecamatan</option>
                                @foreach ($kategoris as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="wisata" class="form-label fw-bold">wisata</label>
                            <select id="wisata" class="form-select" wire:model="wisata">
                                <option value="">Pilih Desa</option>
                                @foreach ($wisatas as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_wisata }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-end">
                            <button class="btn btn-primary" wire:click.prevent="cetakPdf()">
                                <i class="fas fa-print me-2"></i>Cetak
                            </button>
                            <button class="btn btn-success" wire:click.prevent="cetakSemua()">
                                <i class="fas fa-print me-2"></i>Cetak Semua
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>