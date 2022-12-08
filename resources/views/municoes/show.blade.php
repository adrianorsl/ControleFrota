<?php
        use App\Models\TipoMunicao;
        $tipoMunicao = TipoMunicao::all();
?>


<x-layout titulo="Tipo da Munição">
<ul>
    <div class="py-4">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Tipo da Munição</th>
                <th scope="col">Alterar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $municoes->id }}</th>
                <td>{{ $municoes->quantidade }}</td>
                <?php
                    $tipoMunicao = TipoMunicao::find($municoes->tipoMunicoes_id);
                ?>
                <td>{{$tipoMunicao->descricao}}</td>
                
                <td><a href="{{ route('tipoMunicao.edit', $tipoMunicao->id) }}"><button type="button" class="btn btn-warning">Editar</button></a></td>
                <td><form id="form_delete" name="form_delete" action="{{ route('tipoMunicao.destroy', $tipoMunicao->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Excluir</button>
            </tr>
    </div>
    </ul>
</x-layout>