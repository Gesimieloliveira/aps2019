@extends('layout.site')

@section('titulo', 'Estagiario')
    
@section('conteudo')
    
        
<div class="container">     
    
    <h3 class="center">Adicionar Estagio</h3>

    <div class="row">
    <form action="{{route('admin.estagiarios.salvar')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        @include('admin.estagiarios._form')

        <button class="btn deep-orange">Salvar</button>
    </form>
    </div>

</div>



@endsection
