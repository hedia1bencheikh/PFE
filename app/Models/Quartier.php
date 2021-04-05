<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    use HasFactory;
    protected $table='quartier';
    protected $filiables=[
        'id',
        'id_projet',
        'nom_quartier',
        'lat',
        'lng',
    ];
}
