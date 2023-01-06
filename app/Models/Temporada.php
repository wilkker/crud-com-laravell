<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    use HasFactory;
    protected $table = 'temporadas';
    public $timestamps = false;
    protected $fillable = ['numero'];

    public function Epsodios ()

    {
        return $this->hasMany(related: Epsodio::class);
    }

    public function Serie ()
    {
        return $this->belongsTo( related: Serie::class);
    }
}
