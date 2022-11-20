<?php
     use App\Models\Cargo;

?>


<x-layout titulo="Usuario">
    <ul>
        <label for="id">ID</label>
        <input type="text" name="id" id="id"
        value="{{ $usuario->id }}" disabled><br>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"
        value="{{ $usuario->nome }} "><br>
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user"
        value="{{ $usuario->user }} "><br>
        <label for="pass">Senha</label>
        <input type="password" name="pass" id="pass"
        value="{{ $usuario->pass }} "><br>
        <label for="cargo_id">Cargo id</label>
        <input type="text" name="cargo_id" id="cargo_id"
        value="{{ $usuario->cargo_id }} "><br>
        <?php $cargo = Cargo::find($usuario->cargo_id) ?>
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao"
        value="{{ $cargo->descricao }} "><br>
        
        <a href="{{ route('usuario.edit', $usuario->id) }}"><button>Editar</button></a>

    </ul>
</x-layout>