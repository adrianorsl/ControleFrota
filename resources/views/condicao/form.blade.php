<div class="mb-3">
<label for="id">ID</label>
<input type="text"class="form-control" name="id" id="id"
value="@if (isset($condicao->id)) {{ $condicao->id }} @endif" disabled><br>
</div>

<div class="mb-3">
<label for="nome">Condição</label>
<input type="text" class="form-control" name="nome" id="nome"
value="@if (isset($condicao->nome)) {{ $condicao->nome }} @endif" ><br>
</div>

<button type="submit" class="btn btn-warning" name="acao" value="salvar"
id="acao"> @if(isset($condicao->nome)) Alterar @else Salvar @endif
</button> 