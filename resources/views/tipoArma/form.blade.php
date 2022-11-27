<div class="mb-3">
<label for="id">ID</label>
<input type="text" class="form-control" name="id" id="id"
value="@if (isset($tipoArma->id)) {{ $tipoArma->id }} @endif" disabled><br>
</div>

<div class="mb-3">
<label for="nome">Nome</label>
<input type="text" class="form-control" name="nome" id="nome"
value="@if (isset($tipoArma->nome)) {{ $tipoArma->nome }} @endif" ><br>
</div>

<button type="submit" name="acao" value="salvar"
id="acao"> @if(isset($tipoArma->nome)) Alterar @else Salvar @endif
</button> 