<x-layout titulo="Armas">
    <a href={{ route('armas.create') }}>Adicionar</a>
    <ul>
        <form action="{{ route('armas.index') }}" method="get">
            @method('GET')
            <input type="text" name="find" id="find"><input type="submit" value="OK">
        </form>
        <table>
        <tr><td><b>ID</b></td>
            <td><b>Armas</b></td>
            
            <td><b>Detalhes</b></td>
            <td><b>Alterar</b></td>
            <td><b>Excluir</b></td></tr>

            @foreach($armas as $item)      
                <tr><td>{{$item ->id}}</td>
                    <td>{{$item->numero}}</td>
                    <td>{{$item->tipo}}</td>
                    
            <td><a href="{{ route('armas.show', $item->id) }}"><button>Detalhes</button></a></td>
            <td><a href="{{ route('armas.edit', $item->id) }}"><button>Editar</button></a></td>
            <td><form id="form_delete" name="form_delete" action="{{ route('armas.destroy', $item->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit">Excluir</button>
                </form></td></tr>       
            @endforeach
    </ul>
</x-layout>