<label for="id">ID</label>
<input type="text" name="id" id="id"
value="@if (isset($armas->id)) {{ $armas->id }} @endif" disabled><br>

<label for="numero">Número</label>
<input type="text" name="numero" id="numero"
value="@if (isset($armas->numero)) {{ $armas->numero }} @endif" ><br>

<label for="tipo">Tipo da Arma</label>
<input type="interger" name="tipo" id="tipo"
value="@if (isset($armas->tipo)) {{ $armas->tipo }} @endif" ><br>

<button type="submit" name="acao" value="salvar"
id="acao"> @if(isset($armas->numero)) Alterar @else Salvar @endif
</button> 