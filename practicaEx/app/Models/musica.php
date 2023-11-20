<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class musica extends Model
{
    use HasFactory;
    public $timestamps=false;
    private $fillable =[
    'title',
    'title_short',
    'preview',
    'duration',
    'cover_small',

   ];
  
}
