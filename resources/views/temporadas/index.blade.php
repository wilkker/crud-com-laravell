@extends('layout')


@section('cabecalho')
    Temporadas da série {{$serie->nome}}
@endsection

@section('conteudo')
    <ul class="list-group " >
        @foreach($temporadas as $temporada)
        <li class="list-group-item d-flex justify-content-between align-items-center ">Temporadas {{$temporada->numero}}

                <a href="/temporadas/{{$temporada->id}}/episodios" class="btn btn-info btn-sm m-1 ">
                    <i class="fas fa-external-link-alt"></i>
                </a>

        </li>
        @endforeach
    </ul>
    <a href="/series" class="btn btn-primary mt-4  ">Voltar</a>

@endsection




