<?php
    use App\Models\TipoArma;
    use App\Models\Armas;
    $tipoArma = TipoArma::all();
    $armas = Armas::all();
?>

<x-layout titulo="Armas">
    <a href={{ route("arma.create") }}>Adicionar</a>
    <ul>
        <form action="{{ route('arma.index') }}" method="get">
            @method('GET')
            <input type="text" name="find" id="find"><input type="submit" value="OK">
        </form>
        <table>
        <tr><td><b>ID</b></td>
            <td><b>Armas</b></td>
            <td><b>Tipo da Arma</b></td>
            
            <td><b>Detalhes</b></td>
            <td><b>Alterar</b></td>
            <td><b>Excluir</b></td></tr>
           
            @foreach($armas as $item)
                <tr><td>{{$item->id}}</td>
                    <td>{{$item->numero}}</td>
                    <?php
                        $tipoArma = TipoArma::find($item->tipo_id);
                    ?>
                    <td>{{$tipoArma->nome}}</td>
            
            <td><a href="{{ route('arma.show', $item->id) }}"><button>Detalhes</button></a></td>
            <td><a href="{{ route('arma.edit', $item->id) }}"><button>Editar</button></a></td>
            <td><form id="form_delete" name="form_delete" action="{{ route('arma.destroy', $item->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit">Excluir</button>
                </form></td></tr>    
                  
            @endforeach
    </ul>
</x-layout>