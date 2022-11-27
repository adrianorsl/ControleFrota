<?php 
    use App\Models\TipoArma;
    use App\Models\Armas;
    $tipoArma = TipoArma::all();
?>

<div class="mb-3">
<label for="id">ID</label>
<input type="text" class="form-control" name="id" id="id"
value="@if (isset($armas->id)) {{ $armas->id }} @endif" disabled>
</div>

<div class="mb-3">
<label for="numero">Número</label>
<input type="text" class="form-control" name="numero" id="numero"
value="@if (isset($armas->numero)) {{ $armas->numero }} @endif" >
</div>

<div class="mb-3">
<label for="tipo_id">Tipo da Arma</label>
<select type="text" class="form-control" name="tipo_id" id="tipo_id">
    @if(empty($_POST))
        @foreach($tipoArma as $item)    
            <option value="{{$item->id}}">
                {{$item->nome}}                                                       
            </option>  
        @endforeach 
    @else
        <?php
            $tipoArma2 = TipoArma::find($armas->tipo_id);
            $array = array($tipoArma2);
            foreach($tipoArma as $item){
                if($item->id == $armas->tipo_id){

                }else{
                    array_push($array, $item);
                }
            }
        ?>
        @foreach($array as $item)    
            <option value="{{$item->id}}">
                {{$item->nome}}                                                       
            </option>  
        @endforeach 
    @endif
</select>
</div>

<button type="submit" class="btn btn-warning" name="acao" value="salvar"
id="acao"> @if(isset($armas->numero)) Alterar @else Salvar @endif
</button> 