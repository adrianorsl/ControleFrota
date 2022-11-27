<?php
    use App\Models\TipoArma;
    $tipoArma = TipoArma::all();   
?>

<x-layout titulo="Armas">
    <a href= {{ route('arma.create') }} class="btn btn-primary"> Adicionar</a>
    <div class="py-4">
        <form action="{{ route('arma.index') }}" method="get">
            @method('GET')
            <input type="text" name="find" id="find"><input type="submit" value="OK">
        </form>
    </div>
    <div class="py-4">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Número</th>
                <th scope="col">Tipo da Arma</th>
                <th scope="col">Detalhes</th>
                <th scope="col">Alterar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($armas as $item)
                <tr><td>{{$item->id}}</td>
                    <td>{{$item->numero}}</td>
                    <?php
                        $tipoArma = TipoArma::find($item->tipo_id);
                    ?>
                    <td>{{$tipoArma->nome}}</td>
            
            <td><a href="{{ route('arma.show', $item->id) }}"><button type="button" class="btn btn-info">Detalhes</button></a></td>
            <td><a href="{{ route('arma.edit', $item->id) }}"><button type="button" class="btn btn-warning">Editar</button></a></td>
            <td><form id="form_delete" name="form_delete" action="{{ route('arma.destroy', $item->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Excluir</button>
                </form></td></tr>    
                  
            @endforeach   
        </tbody>
        </table>       
    </div> 
        {{ $armas->appends([
            'find' => request()->get('find','')
        ])->links() }}
</x-layout>

