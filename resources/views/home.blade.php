@extends('layout.site')

@section('titulo', 'Estagiario')
    
@section('conteudo')
    
        
<div class="container">     
    
    <h3 class="center">Lista de Estagio disponiveis</h3>

<div class="row">
    @foreach ($estagiarios as $estagio)
        
   
<div class="col s12 m7">
    <div class="card">
    <div class="card-image">
    <img src="{{asset($estagio->imagem)}}}}">
        <span class="card-title">Card Title</span>
    </div>
    <div class="card-content">
    <h4>{{$estagio->titulo}}</h4>
    <p>{{$estagio->descricao}}}}</p>
    </div>
    <div class="card-action">
        <a href="#">Ver mais...</a>
    </div>
    </div>
</div>
@endforeach
</div>
                    


</div>



@endsection
