<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akhir extends Model
{
    use HasFactory;
    protected $table = 'potensi_wisata';
    protected $fillable = [
        'wisata_id',
        'kategori_id',
        'deskripsi',
        'latitude',
        'longitude',
    ];
    
}
