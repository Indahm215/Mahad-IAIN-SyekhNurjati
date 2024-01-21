<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriModel extends Model
{
    protected $table = 'galeri_models';
    protected $fillable = ['nama_gambar', 'gambar', 'kategori_gambar'];
}
