<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paises extends Model {

    //use HasFactory;
    protected $table = 'persona';
    protected $fillable = [
        'name',
        'email',
        'dni',
        'edad',
    ];

}
