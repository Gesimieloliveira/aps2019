@extends('layout.site')

@section('titulo', 'Contatos')
    
@section('conteudo')
    
        
<h3>essa é viu index contato</h3>

 @foreach($contatos as $contato)

    <p>{{ $contato->nome }}</p>
    <p>{{ $contato->tel }}</p>

@endforeach


@endsection
