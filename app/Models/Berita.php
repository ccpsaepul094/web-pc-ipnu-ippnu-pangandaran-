<?php

namespace App\Models;

use App\Http\Controllers\BeritaController;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'isi',
        'kategori_id',
        'penulis',
        'gambar',
        'tanggal',
        'status',
        'user_id'
    ];
}
