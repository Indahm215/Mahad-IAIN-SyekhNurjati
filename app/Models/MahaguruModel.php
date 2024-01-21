<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahaguruModel extends Model
{
    protected $table = 'mahaguru_models';
    protected $fillable = ['foto', 'nama_lengkap', 'jenis_kelamin', 'jabatan_fungsional', 'nidn', 'ttl', 'email', 'no_telpon', 'agama', 'bidang_keahlian', 'matkul_diampu', 'status'];
}

