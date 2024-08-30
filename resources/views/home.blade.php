@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg rounded-lg">
                <div class="card-header bg-dark text-white text-center py-4">
                    <img class="img-fluid mb-3" src="{{ asset('pekalonganJPG.png') }}" alt="logo" width="70px" height="70px">
                    <h3 class="mt-2">Sistem Informasi Geografis (SIG) Wisata</h3>
                    <h1 class="text-uppercase font-weight-bold">KABUPATEN Pekalongan</h1>
                </div>

                <div class="card-body">
                    <div class="row">
                        {{-- Kategori Wisata --}}
                        <div class="col-md-3 mt-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-primary text-white text-center py-3">
                                    <i class="fas fa-map-signs fa-2x"></i>
                                    <h5 class="card-title mt-2">Kategori Wisata</h5>
                                </div>
                                <div class="card-body bg-light text-dark">
                                    <h1 class="text-center display-4">{{ count($kategori) }}</h1>
                                </div>
                            </div>
                        </div>
                        {{-- Wisata --}}
                        <div class="col-md-3 mt-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-success text-white text-center py-3">
                                    <i class="fas fa-umbrella-beach fa-2x"></i>
                                    <h5 class="card-title mt-2">Wisata</h5>
                                </div>
                                <div class="card-body bg-light text-dark">
                                    <h1 class="text-center display-4">{{ count($wisata) }}</h1>
                                </div>
                            </div>
                        </div>
                        {{-- Potensi --}}
                        <div class="col-md-3 mt-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-danger text-white text-center py-3">
                                    <i class="fas fa-lightbulb fa-2x"></i>
                                    <h5 class="card-title mt-2">Potensi</h5>
                                </div>
                                <div class="card-body bg-light text-dark">
                                    <h1 class="text-center display-4">{{ count($potensi) }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection