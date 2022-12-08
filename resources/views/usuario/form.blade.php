<?php 
    use App\Models\Cargo;
    use App\Models\Usuario;
    $cargo = new Cargo();
    $cargo = Cargo::all();
    $usuariio = new Usuario(); 

?>

<div class="mb-3">
<label for="id">ID</label>
<input type="text" class="form-control" name="id" id="id"
value="@if (isset($usuario->id)) {{ $usuario->id }} @endif" disabled>
</div>

<div class="mb-3">
<label for="nome">Nome</label>
<input type="text" class="form-control" name="nome" id="nome"
value="@if (isset($usuario->nome)) {{ $usuario->nome }} @endif" >
</div>

<div class="mb-3">
<label for="user">Login</label>
<input type="text" class="form-control" name="user" id="user"
value="@if (isset($usuario->user)) {{ $usuario->user}} @endif" >
</div>

<div class="mb-3">
<label for="pass">Senha</label>
<input type="password" class="form-control" name="pass" id="pass"
value="@if (isset($usuario->pass)) {{ $usuario->pass}} @endif" >
</div>

<div class="mb-3">
<label for="cargo_id">Cargo</label>
<select type="text" class="form-control" name="cargo_id" id="cargo_id">
    @foreach($cargo as $item)    
        <option value="{{$item->id}}"
            @if($usuario->codigo_id == $item->id)
                {{"selected"}}
            @endif>
                {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
</div>

<button type="submit" class="btn btn-warning" name="acao" value="salvar"
id="acao"> @if(isset($usuario->nome)) Alterar @else Salvar @endif
</button> 