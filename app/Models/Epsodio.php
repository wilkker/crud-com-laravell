<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epsodio extends Model
{
    use HasFactory;
    protected $table = 'epsodios';
    public $timestamps = false;
    protected $fillable = ['numero'];

    public function temporada()
    {
        return $this->belongsTo(related: temporada::class);
    }
}
