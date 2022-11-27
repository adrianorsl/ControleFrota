<div class="mb-3">
<label for="id">ID</label>
<input type="text" class="form-control" name="id" id="id"
value="@if (isset($cargo->id)) {{ $cargo->id }} @endif" disabled><br>
</div>

<div class="mb-3">
<label for="descricao">Cargo</label>
<input type="text" class="form-control" name="descricao" id="descricao"
value="@if (isset($cargo->descricao)) {{ $cargo->descricao }} @endif" ><br>
</div>

<button type="submit" name="acao" value="salvar"
id="acao"> @if(isset($cargo->descricao)) Alterar @else Salvar @endif
</button> 
