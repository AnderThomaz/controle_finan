@extends('site.layout')
@section('titulo', 'Essa é a Pagina Home')

@section('conteudo')

<div class="row container">
        @foreach ($produtos as $produtos)
            <div class="row">
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="{{$produtos->imagem}}">
                  <span class="card-title">{{$produtos->nome}}</span>
                </div>
                <div class="card-content">
                  <p>{{Str::limit($produtos->descricao, 20)}}</p>
                </div>
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
              </div>
            </div>

        
        @endforeach

</div>


@endsection


@push('stylaMaterialLize')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush



@push('jsMaterialize')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush