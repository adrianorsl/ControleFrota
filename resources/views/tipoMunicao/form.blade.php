<div class="mb-3">
<label for="id">ID</label>
<input type="text" class="form-control" name="id" id="id"
value="@if (isset($tipoMunicao->id)) {{ $tipoMunicao->id }} @endif" disabled>
</div>

<div class="mb-3">
<label for="descricao">Descrição</label>
<input type="text" class="form-control" name="descricao" id="descricao"
value="@if (isset($tipoMunicao->descricao)) {{ $tipoMunicao->descricao }} @endif" >
</div>

<button type="submit" class="btn btn-warning" name="acao" value="salvar"
id="acao"> @if(isset($tipoMunicao->descricao)) Alterar @else Salvar @endif
</button> 