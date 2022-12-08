<?php
     use App\Models\Cargo;

?>


<x-layout titulo="Usuario">
<ul>
    <div class="py-4">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Usuario</th>
                <th scope="col">Senha</th>
                <th scope="col">Cargo ID</th>
                <th scope="col">Cargo</th>
                <th scope="col">Alterar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $usuario->id }}</th>
                <td>{{ $usuario->nome }}</td>
                <td>{{ $usuario->user }}</td>
                <td>{{ $usuario->pass }}</td>
                <td>{{ $usuario->cargo_id }}</td>
                <?php $cargo = Cargo::find($usuario->cargo_id) ?>
                <td>{{ $cargo->descricao }}</td>
                <td><a href="{{ route('usuario.edit', $usuario->id) }}"><button type="button" class="btn btn-warning">Editar</button></a></td>
                <td><form id="form_delete" name="form_delete" action="{{ route('usuario.destroy', $usuario->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Excluir</button>
            </tr>
    </div>
    </ul>
</x-layout>