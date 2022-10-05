<label for="id">ID</label>
<input type="text" name="id" id="id"
value="@if (isset($veiculo->id)) {{ $veiculo->id }} @endif" disabled><br>

<label for="placa">Placa</label>
<input type="text" name="placa" id="placa"
value="@if (isset($veiculo->placa)) {{ $veiculo->placa }} @endif" disabled><br>

<label for="numero">Número</label>
<input type="text" name="numero" id="numero"
value="@if (isset($veiculo->numero)) {{ $veiculo->numero }} @endif" ><br>

<label for="km">KM</label>
<input type="text" name="km" id="km"
value="@if (isset($veiculo->km)) {{ $veiculo->km }} @endif" ><br>

<button type="submit" name="acao" value="salvar"
id="acao"> @if(isset($veiculo->placa)) Alterar @else Salvar @endif
</button> 