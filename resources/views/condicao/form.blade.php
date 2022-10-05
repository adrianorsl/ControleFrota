<label for="id">ID</label>
<input type="text" name="id" id="id"
value="@if (isset($condicao->id)) {{ $condicao->id }} @endif" disabled><br>

<label for="nome">Condição</label>
<input type="text" name="nome" id="nome"
value="@if (isset($condicao->nome)) {{ $condicao->nome }} @endif" ><br>

<button type="submit" name="acao" value="salvar"
id="acao"> @if(isset($condicao->nome)) Alterar @else Salvar @endif
</button> 