<x-layout titulo="Veículo">
    <a href={{ route("veiculo.create") }} class="btn btn-primary">Adicionar</a>
    <div class="py-4">
        <form action="{{ route('veiculo.index') }}" method="get">
            @method('GET')
            Buscar pelo Número do veículo<br>
            <input type="text" name="find" id="find"><input type="submit" value="OK">
        </form>
    </div>
    <div class="py-4">
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Placa</th>
                <th scope="col">Número</th>
                <th scope="col">KM</th>
                <th scope="col">Detalhes</th>
                <th scope="col">Alterar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($veiculo as $item)      
                <tr><td>{{$item ->id}}</td>
                    <td>{{$item->placa}}</td>
                    <td>{{$item->numero}}</td>
                    <td>{{$item->km}}</td>
                    
            <td><a href="{{ route('veiculo.show', $item->id) }}"><button type="button" class="btn btn-info">Detalhes</button></a></td>
            <td><a href="{{ route('veiculo.edit', $item->id) }}"><button type="button" class="btn btn-warning">Editar</button></a></td>
            <td><form id="form_delete" name="form_delete" action="{{ route('veiculo.destroy', $item->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Excluir</button>
                </form></td></tr>       
            @endforeach
    </ul>
</x-layout>