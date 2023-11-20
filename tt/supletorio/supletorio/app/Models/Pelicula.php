<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'peliculas';
    protected $fillable =['nombreP','tipoP','url_video','url','imagen_id'];
}
