<x-layout titulo="Veículo">
    <a href={{ route("veiculo.create") }}>Adicionar</a>
    <ul>
        <form action="{{ route('veiculo.index') }}" method="get">
            @method('GET')
            Buscar pelo Número do veículo<br>
            <input type="text" name="find" id="find"><input type="submit" value="OK">
        </form>
        <table>
        <tr><td><b>ID</b></td>
            <td><b>Placa</b></td>
            <td><b>Número</b></td>
            <td><b>KM</b></td>
            
            <td><b>Detalhes</b></td>
            <td><b>Alterar</b></td>
            <td><b>Excluir</b></td></tr>

            @foreach($veiculo as $item)      
                <tr><td>{{$item ->id}}</td>
                    <td>{{$item->placa}}</td>
                    <td>{{$item->numero}}</td>
                    <td>{{$item->km}}</td>
                    
            <td><a href="{{ route('veiculo.show', $item->id) }}"><button>Detalhes</button></a></td>
            <td><a href="{{ route('veiculo.edit', $item->id) }}"><button>Editar</button></a></td>
            <td><form id="form_delete" name="form_delete" action="{{ route('veiculo.destroy', $item->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit">Excluir</button>
                </form></td></tr>       
            @endforeach
    </ul>
</x-layout>