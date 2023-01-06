@extends ('layout')


@section('cabecalho')
    Epsódios da série
@endsection


@section('conteudo')

<ul class="list-group " >
        @foreach($episodios as $episodio)
        <li class="list-group-item d-flex justify-content-between align-items-center ">Epsódio  {{$episodio->numero}}


        </li>
        @endforeach
    </ul>

    <a href="/series" class="btn btn-primary mt-4  ">Voltar para lista de séries </a>

@endsection


