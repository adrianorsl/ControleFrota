<x-layout titulo="Tipo das Munições">
    <a href={{ route("tipoMunicao.create") }}>Adicionar</a>
    <ul>
        <form action="{{ route('tipoMunicao.index') }}" method="get">
            @method('GET')
            <input type="text" name="find" id="find"><input type="submit" value="OK">
        </form>
        <table>
        <tr><td><b>ID</b></td>
            <td><b>Tipo da Munição</b></td>
            
            <td><b>Detalhes</b></td>
            <td><b>Alterar</b></td>
            <td><b>Excluir</b></td></tr>

            @foreach($tipoMunicao as $item)      
                <tr><td>{{$item ->id}}</td>
                    <td>{{$item->descricao}}</td>
                    
            <td><a href="{{ route('tipoMunicao.show', $item->id) }}"><button>Detalhes</button></a></td>
            <td><a href="{{ route('tipoMunicao.edit', $item->id) }}"><button>Editar</button></a></td>
            <td><form id="form_delete" name="form_delete" action="{{ route('tipoMunicao.destroy', $item->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit">Excluir</button>
                </form></td></tr>       
            @endforeach
    </ul>
</x-layout>