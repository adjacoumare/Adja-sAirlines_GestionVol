<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    use HasFactory;

    protected $fillable = ['code_vol', 'date_depart', 'heure_depart', 'classe_A', 'classe_B', 'prix_classe_A', 'prix_classe_B'];
}
