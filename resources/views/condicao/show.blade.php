<x-layout titulo="Condição">
<ul>
    <div class="py-4">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Condição</th>
                <th scope="col">Alterar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $condicao->id }}</th>
                <td>{{ $condicao->nome }}</td>
                <td><a href="{{ route('condicao.edit', $condicao->id) }}"><button type="button" class="btn btn-warning">Editar</button></a></td>
                <td><form id="form_delete" name="form_delete" action="{{ route('condicao.destroy', $condicao->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Excluir</button>
            </tr>
    </div>
    </ul>
</x-layout>