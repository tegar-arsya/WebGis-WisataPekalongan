<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $desa = \App\Models\Desa::all();
        $potensi = \App\Models\Akhir::all();
        $wisata = \App\Models\Wisata::all();
        $kategori = \App\Models\Kategori::all();
        $review = \App\Models\Review::all();

        return view('home', compact('kategori', 'wisata', 'potensi', 'reviews'));
    }
}
