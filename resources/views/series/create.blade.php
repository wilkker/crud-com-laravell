@extends('layout')


@section('cabecalho')
    Adiconar Séries
@endsection



@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post">
    @csrf

    <div class="row">

    <div class="col col-8">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome">
    </div>
    <div class="col col-2">
        <label for="qtd_temporadas">Nº Temporadas</label>
        <input type="number" name="qtd_temporadas" class="form-control" id="qtd_temporadas">
    </div>
    <div class="col col-2">
        <label for="ep_por_temporada">Nº Epsódios</label>
        <input type="number" name="ep_por_temporada" class="form-control" id="ep_por_temporada">
    </div>
    </div>

    <button class="btn btn-primary mt-2">Adcionar</button>
</form>
@endsection




