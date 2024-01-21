<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorModel extends Model
{
  protected $table = 'tutor_models';
    protected $fillable = ['foto', 'nama', 'jenis_kelamin'];
  
}
