<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frutas extends Model
{
    protected $table='frutas';
    public $timestamps=false;
    protected $fillable=['nombre','cantidad','proveedor'];
    use HasFactory;
}
