<x-layout titulo="Tipo das Armas">
    <a href={{ route("tipoArma.create") }}>Adicionar</a>
    <ul>
        <form action="{{ route('tipoArma.index') }}" method="get">
            @method('GET')
            <input type="text" name="find" id="find"><input type="submit" value="OK">
        </form>
        <table>
        <tr><td><b>ID</b></td>
            <td><b>Tipo da Arma</b></td>
            
            <td><b>Detalhes</b></td>
            <td><b>Alterar</b></td>
            <td><b>Excluir</b></td></tr>

            @foreach($tipoArma as $item)      
                <tr><td>{{$item ->id}}</td>
                    <td>{{$item->nome}}</td>
                    
            <td><a href="{{ route('tipoArma.show', $item->id) }}"><button>Detalhes</button></a></td>
            <td><a href="{{ route('tipoArma.edit', $item->id) }}"><button>Editar</button></a></td>
            <td><form id="form_delete" name="form_delete" action="{{ route('tipoArma.destroy', $item->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit">Excluir</button>
                </form></td></tr>       
            @endforeach
    </ul>
</x-layout>