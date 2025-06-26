<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model
{
    
    use HasFactory;

   
    protected $fillable = ['nombre']; // Campos asignables masivamente

    // Relación con Materiales (una Categoría tiene muchos Materiales)
    public function materiales()
    {
        return $this->hasMany(Material::class, 'categoria_id');
    }
}

