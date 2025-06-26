<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'rols'; 
    protected $primaryKey = 'idRol';
    public $timestamps = true;

    protected $fillable = [
        'nombre',
    ];

   
    public function usuarios()
    {
        return $this->hasOne(Usuario::class, 'idRol');
}
}