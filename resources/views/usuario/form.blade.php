<?php 
    use App\Models\Cargo;
    use App\Models\Usuario;
    $cargo = new Cargo();
    $cargo = Cargo::all();
    $usuariio = new Usuario(); 

?>

<label for="id">ID</label>
<input type="text" name="id" id="id"
value="@if (isset($usuario->id)) {{ $usuario->id }} @endif" disabled><br>

<label for="nome">Nome</label>
<input type="text" name="nome" id="nome"
value="@if (isset($usuario->nome)) {{ $usuario->nome }} @endif" ><br>

<label for="user">Login</label>
<input type="text" name="user" id="user"
value="@if (isset($usuario->user)) {{ $usuario->user}} @endif" ><br>

<label for="pass">Senha</label>
<input type="password" name="pass" id="pass"
value="@if (isset($usuario->pass)) {{ $usuario->pass}} @endif" ><br>

<label for="cargo_id">Cargo</label>
<select type="text" name="cargo_id" id="cargo_id">
    @foreach($cargo as $item)    
        <option value="{{$item->id}}"
            @if(isset($usuario->codigo_id) )
            {{'selected'}}
            @endif>
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<button type="submit" name="acao" value="salvar"
id="acao"> @if(isset($usuario->nome)) Alterar @else Salvar @endif
</button> 