<?php
namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index($wisataId)
    {
        $reviews = Review::where('wisata_id', $wisataId)->get();
        return response()->json($reviews);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'wisata_id' => 'required|exists:wisata,id',
            'nama_reviewer' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'ulasan' => 'required|string',
        ]);

        Review::create($validated);

        return response()->json(['success' => true]);
    }
}
