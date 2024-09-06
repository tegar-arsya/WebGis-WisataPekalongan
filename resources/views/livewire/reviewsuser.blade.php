<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5>{{ __('Reviews') }}</h5>
                    </div>

                    <div class="card-body">
                        {{-- Tombol Tambah --}}
                        {{-- <div class="d-flex justify-content-end mb-3">
                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
                                <i class="bi bi-plus-circle me-2"></i> Tambah Wisata
                            </a>
                        </div> --}}

                        {{-- Tabel --}}
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Wisata</th>
                                                <th>Nama Reviewer</th>
                                                <th>Ulasan</th>
                                                <th>Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($reviewsuser as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama_wisata }}</td>
                                                    <td>{{ $item->nama_reviewer }}</td>
                                                    <td>{{ $item->ulasan }}</td>
                                                    <td>{{ $item->rating }}</td>
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
                        {{-- <div class="d-flex justify-content-center mt-3">
                            {{ $reviews->links() }}
                        </div> --}}
                    </div>
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
                    <h6>Apakah Anda yakin ingin menghapus Ulasan ini?</h6>
                    <p><strong>{{ $nama_reviewer }}</strong></p>
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
