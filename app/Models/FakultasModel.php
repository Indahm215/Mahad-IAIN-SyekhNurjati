<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FakultasModel extends Model
{
    protected $table = 'fakultas_models';
    protected $fillable = ['kode_fakultas', 'nama_fakultas'];
}
