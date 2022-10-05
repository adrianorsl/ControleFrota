<label for="id">ID</label>
<input type="text" name="id" id="id"
value="@if (isset($cargo->id)) {{ $cargo->id }} @endif" disabled><br>

<label for="descricao">Cargo</label>
<input type="text" name="descricao" id="descricao"
value="@if (isset($cargo->descricao)) {{ $cargo->descricao }} @endif" ><br>

<button type="submit" name="acao" value="salvar"
id="acao"> @if(isset($cargo->descricao)) Alterar @else Salvar @endif
</button> 