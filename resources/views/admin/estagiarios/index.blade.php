@extends('layout.site')

@section('titulo', 'Estagiario')
    
@section('conteudo')
    
        
<div class="container">     
    
    <h3 class="center">Lista de Estagios</h3>

    <div class="row">
     <table>

<thead>
<tr>

    <th>id</th>
    <th>Titulo</th>
    <th>Descrição</th>
    <th>Imagem</th>
    <th>Disponivel</th>
    <th>Ação</th>
</tr>

</thead>
<tbody>

    @foreach ($registros as $registro)
            
    <tr>
    <td>{{$registro->id }}</td>
    <td>{{$registro->titulo }}</td>
    <td>{{$registro->descricao }}</td>
    <td><img width="70" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo }}"></td>
    <td>{{$registro->publicado }}</td>
    <td><a class="btn deep-orange" href="{{route( 'admin.estagiarios.editar', $registro->id)}}">Editar</a></td>
    <td><a class="btn red" href="{{route( 'admin.estagiarios.deletar', $registro->id)}}">Deletar</a></td>
    
    </tr>

    @endforeach
</tbody>
     </table>
    </div>

    <div class="roe">
    <a class="btn blue" href="{{route('admin.estagiarios.adicionar')}}">Adicionar</a>
    </div>

</div>



@endsection
