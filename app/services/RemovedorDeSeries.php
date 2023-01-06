<?php

namespace App\services;

use App\Models\Epsodio;
use App\Models\Serie;
use App\Models\Temporada;
use Illuminate\Support\Facades\DB;

class RemovedorDeSeries
{
    public function removerSerie ( string $serieId, ):string
    {
        $nomeSerie ='';
        DB::transaction(function() use ( $serieId , &$nomeSerie){
            $serie = Serie::find($serieId);
            $nomeSerie = $serie->nome;

            $this->removeTemporadas($serie);

            $serie->delete();
        });

        return $nomeSerie;

    }

    private function removeTemporadas ($serie):void
    {
        $serie->temporadas->each(function (Temporada $temporada) {
            $this->removeEpisodios($temporada);
            $temporada->delete();
        });
    }

    private function removeEpisodios ($temporada):void
    {
        $temporada->epsodios->each(function(Epsodio $episodio) {
            $episodio->delete();
        });
    }
}
