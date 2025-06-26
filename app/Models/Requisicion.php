<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Requisicion extends Model
{
    use HasFactory;


    protected $fillable = [
        'fecha',
        'estado',
    ];

    public function items()
    {
        return $this->hasMany(ItemRequisicion::class, 'idRequisicion');
    }
}