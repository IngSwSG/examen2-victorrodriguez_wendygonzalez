<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaterialUnidad extends Model
{
    use HasFactory;

   
    protected $fillable = [
        'cantidad',
        'idUnidad',
        'codigo',
        'codigoPresupuesto',
    ];

   
    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'idUnidad');
    }

    
    public function material()
    {
        return $this->belongsTo(Material::class, 'codigo');
    }

    
    public function presupuesto()
    {
        return $this->belongsTo(Presupuesto ::class, 'codigoPresupuesto');
   }
}