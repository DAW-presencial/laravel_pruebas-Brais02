<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    use HasFactory;
    
    protected $table = 'paises';
    protected $keyType = 'string';
    protected $primaryKey = 'codigoISO3';
    protected $fillable = [
        'codigoISO3',
        'codigoISO2',
        'cod_numerico',
        'nombre',
        ];
    
}
