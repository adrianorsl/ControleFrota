<?php 
    use App\Models\Cargo;
    use App\Models\Usuario;
    $cargo = new Cargo();
    $cargo = Cargo::all();
    $usuariio = new Usuario();
?>

<x-layout titulo="Usuarios">
    <a href={{ route("usuario.create") }}>Adicionar</a>
    <ul>
        <form action="{{ route('usuario.index') }}" method="get">
            @method('GET')
            <input type="text" name="find" id="find"><input type="submit" value="OK">
        </form>
        <table>
        <tr><td><b>ID</b></td>
            <td><b>Nome</b></td>
            <td><b>Login</b></td>
            <td><b>Cargo</b></td>

            <td><b>Detalhes</b></td>
            <td><b>Alterar</b></td>
            <td><b>Excluir</b></td></tr>
           
            @foreach($usuario as $item)
                <tr><td>{{$item->id}}</td>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->login}}</td>
                    <?php
                        $cargo = Cargo::find($item->cargo_id);
                    ?>
                    <td>{{$cargo->descricao}}</td>
            
            <td><a href="{{ route('usuario.show', $item->id) }}"><button>Detalhes</button></a></td>
            <td><a href="{{ route('usuario.edit', $item->id) }}"><button>Editar</button></a></td>
            <td><form id="form_delete" name="form_delete" action="{{ route('usuario.destroy', $item->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit">Excluir</button>
                </form></td></tr>    
                  
            @endforeach
    </ul>
</x-layout>