<x-layout titulo="Cargo">
    <ul>
    <div class="py-4">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descrição</th>
                <th scope="col">Alterar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $cargo->id }}</th>
                <td>{{ $cargo->descricao }}</td>
                <td><a href="{{ route('cargo.edit', $cargo->id) }}"><button type="button" class="btn btn-warning">Editar</button></a></td>
                <td><form id="form_delete" name="form_delete" action="{{ route('cargo.destroy', $cargo->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Excluir</button>
            </tr>
    </ul>
</x-layout>