<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Presupuestp extends Model

  {
    use HasFactory;


    protected $fillable = [
        'nombrePresupuesto',
        'idUnidad',
    ];

    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'idUnidad');
    }

    public function materialUnidads()
    {
        return $this->hasMany(MaterialUnidad::class, 'codigoPresupuesto');
    }
}
