<?php 
    use App\Models\Carrocheck;
    use App\Models\Condicao;
    $condicao = new Condicao();
    $concicao = Condicao::all();
    $carrocheck = new Carrocheck();
 
?>

<x-layout titulo="carro check">
    <a href={{ route("carrocheck.create") }}>Adicionar</a>
    <ul>
        <form action="{{ route('carrocheck.index') }}" method="get">
            @method('GET')
            <input type="text" name="find" id="find"><input type="submit" value="OK">
        </form>
        <table>
        <tr><td><b>Ocorrencia</b></td>
            <td><b>Capo</b></td>
            <td><b>Paralama Dianteiro Esquerdo</b></td>
            <td><b>Paralama Dianteiro Direito</b></td>
            <td><b>Paralama Traseiro Esquerdo</b></td>

            <td><b>Detalhes</b></td>
            <td><b>Alterar</b></td>
            <td><b>Excluir</b></td></tr>
           
            @foreach($carrocheck as $item)
                <tr><td>{{$item->ocorrencia}}</td>
                    <td>{{$item->capo}}</td>
                    <td>{{$item->paralamaDianteiro_esq}}</td>
                    <td>{{$item->paralamaDianteiro_dir}}</td>
                    <td>{{$item->paralamaTraseiro_esq}}</td>
                   
            
            <td><a href="{{ route('usuario.show', $item->id) }}"><button>Detalhes</button></a></td>
            <td><a href="{{ route('usuario.edit', $item->id) }}"><button>Editar</button></a></td>
            <td><form id="form_delete" name="form_delete" action="{{ route('usuario.destroy', $item->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit">Excluir</button>
                </form></td></tr>    
                  
            @endforeach
    </ul>
</x-layout>