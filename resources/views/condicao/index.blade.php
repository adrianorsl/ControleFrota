<x-layout titulo="Condições">
    <a href={{ route("condicao.create") }}>Adicionar</a>
    <ul>
        <form action="{{ route('condicao.index') }}" method="get">
            @method('GET')
            <input type="text" name="find" id="find"><input type="submit" value="OK">
        </form>
        <table>
        <tr><td><b>ID</b></td>
            <td><b>Condicão</b></td>
            
            <td><b>Detalhes</b></td>
            <td><b>Alterar</b></td>
            <td><b>Excluir</b></td></tr>

            @foreach($condicao as $item)      
                <tr><td>{{$item ->id}}</td>
                    <td>{{$item->nome}}</td>
                    
            <td><a href="{{ route('condicao.show', $item->id) }}"><button>Detalhes</button></a></td>
            <td><a href="{{ route('condicao.edit', $item->id) }}"><button>Editar</button></a></td>
            <td><form id="form_delete" name="form_delete" action="{{ route('condicao.destroy', $item->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit">Excluir</button>
                </form></td></tr>       
            @endforeach
    </ul>
</x-layout>