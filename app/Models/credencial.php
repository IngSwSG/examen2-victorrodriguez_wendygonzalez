<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Credencial extends Model
{
    use HasFactory;

    protected $table = 'credencials'; 
    protected $primaryKey = 'nombreUsuario';
    public $incrementing = false; 
    public $timestamps = true;

    protected $keyType = 'string'; 

    protected $fillable = [
        'nombreUsuario',
        'contrasena',
        'idUsuario',
    ];

 
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'idUsuario');
    }
}