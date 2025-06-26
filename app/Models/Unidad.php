<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Unidad extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    // Relación con Materiales (a través de la tabla pivote material_unidad)
    public function materiales()
    {
        return $this->belongsToMany(Material::class);
    }
}