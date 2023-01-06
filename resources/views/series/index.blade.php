@extends('layout')

@section('cabecalho')
    Séries
@endsection


@section('conteudo')

@if(!empty($mensagem))
    <div class="alert alert-success">
        {{$mensagem}}
    </div>
@endif
    <a href="/series/criar" class="btn btn-dark mb-2  ">Adcionar</a>

    <ul class=" list-group">
        @foreach($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$serie->nome}}

                <span class="d-flex">




                    <a href="/series/{{addslashes($serie->id)}}/temporadas" class="btn btn-info btn-sm m-1">
                        <i class="fas fa-external-link-alt"></i>
                    </a>

                    <form  method="post" action="/series/remover/{{addslashes($serie->id)}}"
                        onsubmit="return confirm('Tem certeza?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm m-1">
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                    </form>
                </span>
          </li>
        @endforeach
    </ul>

@endsection


