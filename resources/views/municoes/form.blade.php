<?php
        use App\Models\TipoMunicao;
        $tipoMunicao = TipoMunicao::all();
?>

<div class="mb-3">
<label for="id">ID</label>
<input type="text" class="form-control" name="id" id="id"
value="@if (isset($municoes->id)) {{ $municoes->id }} @endif" disabled>
</div>

<div class="mb-3">
<label for="quantidade">Quantidade</label>
<input type="text" class="form-control" name="quantidade" id="quantidade"
value="@if (isset($municoes->quantidade)) {{ $municoes->quantidade }} @endif" >
</div>

<div class="mb-3">
<label for="tipoMunicoes_id">Tipo Munição</label>
<select type="text" class="form-control" name="tipoMunicoes_id" id="tipoMunicoes_id">
    @foreach($tipoMunicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
</div>

<button type="submit" class="btn btn-warning" name="acao" value="salvar"
id="acao"> @if(isset($municoes->quantidade)) Alterar @else Salvar @endif
</button> 