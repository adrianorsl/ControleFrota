<?php
        use App\Models\TipoMunicao;
        $tipoMunicao = TipoMunicao::all();
?>


<x-layout titulo="Tipo das Munições">
    <a href={{ route("municoes.create") }}>Adicionar</a>
    <div class="py-4">
        <form action="{{ route('municoes.index') }}" method="get">
            @method('GET')
            <input type="text" name="find" id="find"><input type="submit" value="OK">
        </form>
    </div>
    <div class="py-4">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Tipo da Munição</th>
                <th scope="col">Detalhes</th>
                <th scope="col">Alterar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($municoes as $item)      
                <tr><td>{{$item ->id}}</td>
                    <td>{{$item->quantidade}}</td>
                    <?php
                        $tipoMunicao = TipoMunicao::find($item->tipoMunicoes_id);
                    ?>
                    <td>{{$tipoMunicao->descricao}}</td>
                    
            <td><a href="{{ route('municoes.show', $item->id) }}"><button type="button" class="btn btn-info">Detalhes</button></a></td>
            <td><a href="{{ route('municoes.edit', $item->id) }}"><button type="button" class="btn btn-warning">Editar</button></a></td>
            <td><form id="form_delete" name="form_delete" action="{{ route('municoes.destroy', $item->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Excluir</button>
                </form></td></tr>    
            @endforeach
        </tbody>
        </table>       
    </div> 
        {{ $municoes->appends([
            'find' => request()->get('find','')
        ])->links() }}
</x-layout>