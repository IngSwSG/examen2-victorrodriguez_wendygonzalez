<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
    
        'unidad_medida', 
        'descripcion', 
        'ubicacion', 
        'categoria_id'
    ];


    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

 
    public function unidades()
    {
        return $this->belongsToMany(Unidad::class); 
    }

}
