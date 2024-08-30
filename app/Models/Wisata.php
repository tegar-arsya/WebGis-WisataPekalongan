<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = 'wisata';
    protected $fillable = ['nama_wisata', 'images', 'kategori', 'luas_wisata','deskripsi', 'kategori_id'];

}
