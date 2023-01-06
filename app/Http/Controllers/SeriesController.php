<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use App\services\CriadorDeSerie;
use App\services\RemovedorDeSeries;
use Illuminate\Http\Request;



class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( request $request)
    {
        $series = Serie::all();
        $mensagem = $request->session()->get('mensagem');


        return view('series.index' , compact('series','mensagem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view ('series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeriesFormRequest $request, CriadorDeSerie $criadorDeSerie
        ) {
            $serie = $criadorDeSerie-> criarSerie(
                $request->nome,
                $request->qtd_temporadas,
                $request->ep_por_temporada
            );
        $request->session()->flash('mensagem',"Série: {$serie->nome} ,criada com sucesso!");

        return redirect('/series');




    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view ('series.editarserie');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request , RemovedorDeSeries $removedorDeSeries )
    {
        $nomeSerie = $removedorDeSeries-> removerSerie($request->id);

        $request->session()->flash('mensagem',"Série $nomeSerie removida com sucesso!");
        return redirect('/series');


    }
}
