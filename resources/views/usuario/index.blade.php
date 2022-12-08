<?php 
    use App\Models\Cargo;
    use App\Models\Usuario;
    $cargo = new Cargo();
    $cargo = Cargo::all();
    $usuariio = new Usuario();
?>

<x-layout titulo="Usuarios">
    <a href={{ route("usuario.create") }} class="btn btn-primary">Adicionar</a>
    <div class="py-4">
        <form action="{{ route('usuario.index') }}" method="get">
            @method('GET')
            <input type="text" name="find" id="find"><input type="submit" value="OK">
        </form>
        </div>
    <div class="py-4">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Login</th>
                <th scope="col">Cargo</th>
                <th scope="col">Detalhes</th>
                <th scope="col">Alterar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuario as $item)
                <tr><td>{{$item->id}}</td>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->login}}</td>
                    <?php
                        $cargo = Cargo::find($item->cargo_id);
                    ?>
                    <td>{{$cargo->descricao}}</td>
            
            <td><a href="{{ route('usuario.show', $item->id) }}"><button type="button" class="btn btn-info">Detalhes</button></a></td>
            <td><a href="{{ route('usuario.edit', $item->id) }}"><button type="button" class="btn btn-warning">Editar</button></a></td>
            <td><form id="form_delete" name="form_delete" action="{{ route('usuario.destroy', $item->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger" >Excluir</button>
                </form></td></tr>    
                  
            @endforeach
            </tbody>
        </table>       
    </div> 
        {{ $usuario->appends([
            'find' => request()->get('find','')
        ])->links() }}
</x-layout>