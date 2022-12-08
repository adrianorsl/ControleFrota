<x-layout titulo="Veículo">
<ul>
    <div class="py-4">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Placa</th>
                <th scope="col">Número</th>
                <th scope="col">KM</th>
                <th scope="col">Alterar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $veiculo->id }}</th>
                <td>{{ $veiculo->placa }}</td>
                <td>{{ $veiculo->numero }}</td>
                <td>{{ $veiculo->km }}</td>
                <td><a href="{{ route('veiculo.edit', $veiculo->id) }}"><button type="button" class="btn btn-warning">Editar</button></a></td>
                <td><form id="form_delete" name="form_delete" action="{{ route('veiculo.destroy', $veiculo->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Excluir</button>
            </tr>
    </div>
    </ul>
</x-layout>