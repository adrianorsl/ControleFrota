<label for="id">ID</label>
<input type="text" name="id" id="id"
value="@if (isset($tipoArma->id)) {{ $tipoArma->id }} @endif" disabled><br>

<label for="nome">Nome</label>
<input type="text" name="nome" id="nome"
value="@if (isset($tipoArma->nome)) {{ $tipoArma->nome }} @endif" ><br>

<button type="submit" name="acao" value="salvar"
id="acao"> @if(isset($tipoArma->nome)) Alterar @else Salvar @endif
</button> 