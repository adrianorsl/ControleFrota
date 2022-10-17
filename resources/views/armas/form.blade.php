<?php 
    use App\Models\TipoArma;
    use App\Models\Armas;
    $tipoArma = TipoArma::all();
    $armas = new Armas();
?>


<label for="id">ID</label>
<input type="text" name="id" id="id"
value="@if (isset($armas->id)) {{ $armas = Armas::id($id) }} @endif" disabled><br>

<label for="numero">Número</label>
<input type="text" name="numero" id="numero"
value="@if (isset($armas->numero)) {{ $armas = Armas::numero(numero) }} @endif" ><br>

<label for="tipo_id">Tipo da Arma</label>
<input type="number" name="tipo_id" id="tipo_id"
value="@if (isset($armas->tipo_id)) {{ $armas->tipo_id}} @endif" ><br>

<button type="submit" name="acao" value="salvar"
id="acao"> @if(isset($armas->numero)) Alterar @else Salvar @endif
</button> 