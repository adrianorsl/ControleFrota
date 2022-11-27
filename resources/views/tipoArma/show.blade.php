<x-layout titulo="Tipo da Arma">
    <ul>
        <div class="py-4">
            <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Alterar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $tipoArma->id }}</th>
                    <td>{{ $tipoArma->nome }}</td>
                    <td><a href="{{ route('tipoArma.edit', $tipoArma->id) }}"><button type="button" class="btn btn-warning">Editar</button></a></td>
                    <td><form id="form_delete" name="form_delete" action="{{ route('tipoArma.destroy', $tipoArma->id)}}" 
                    method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </tr>
         </div>
    </ul>
</x-layout>