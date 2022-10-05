<label for="id">ID</label>
<input type="text" name="id" id="id"
value="@if (isset($tipoMunicao->id)) {{ $tipoMunicao->id }} @endif" disabled><br>

<label for="descricao">Descrição</label>
<input type="text" name="descricao" id="descricao"
value="@if (isset($tipoMunicao->descricao)) {{ $tipoMunicao->descricao }} @endif" ><br>

<button type="submit" name="acao" value="salvar"
id="acao"> @if(isset($tipoMunicao->descricao)) Alterar @else Salvar @endif
</button> 