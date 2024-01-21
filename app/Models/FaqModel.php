<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqModel extends Model
{
  // use HasFactory;
  protected $table = 'faq_models';
  protected $fillable = ['nama', 'pertanyaan', 'jawaban'];
}
