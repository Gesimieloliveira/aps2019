@extends('layout.site')

@section('titulo', 'Estagiario')
    
@section('conteudo')
    
        
<div class="container">     
    
    <h3 class="center">Editar Estagio</h3>

    <div class="row">
    <form action="{{route('admin.estagiarios.atualizar', $registro->id)}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.estagiarios._form')

        <button class="btn deep-orange">Atualizar</button>
    </form>
    </div>

</div>



@endsection
