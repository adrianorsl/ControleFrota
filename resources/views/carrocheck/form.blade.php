<?php 
    use App\Models\Carrocheck;
    use App\Models\Condicao;
    $condicao = new Condicao();
    $concicao = Condicao::all();
    $carrocheck = new Carrocheck();
 
?>

<label for="ocorrencia">Ocorrencia</label>
<input type="text" name="ocorrencia" id="ocorrencia"
value="@if (isset($carrocheck->ocorrencia)) {{ $carrocheck->ocorrencia }} @endif" disabled><br>

<label for="capo">Capo</label>
<select type="text" name="capo" id="capo">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="paralamaDianteiro_esq">Paralama Dianteiro Esquerdo</label>
<select type="text" name="paralamaDianteiro_esq" id="paralamaDianteiro_esq">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="paralamaDianteiro_dir">Paralama Dianteiro Direito</label>
<select type="text" name="paralamaDianteiro_dir" id="paralamaDianteiro_dir">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="paralamaTraseiro_esq">Paralama Traseiro Esquerdo</label>
<select type="text" name="paralamaTraseiro_esq" id="paralamaTraseiro_esq">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="paralamaTraserio_dir">Paralama Traseiro Direito</label>
<select type="text" name="paralamaTraserio_dir" id="paralamaTraserio_dir">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="ParachoqueDianteiro">Parachoque Dianteiro</label>
<select type="text" name="ParachoqueDianteiro" id="ParachoqueDianteiro">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="portaDianteira_esq">Porta Dianteira Esquerda</label>
<select type="text" name="portaDianteira_esq" id="portaDianteira_esq">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="portaDianteira_dir">Porta Dinteira Direita</label>
<select type="text" name="portaDianteira_dir" id="portaDianteira_dir">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="portaTraseira_esq">Porta Traseira Esquerda</label>
<select type="text" name="portaTraseira_esq" id="portaTraseira_esq">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="portaTraseira_dir">Porta Traseira Direita</label>
<select type="text" name="portaTraseira_dir" id="portaTraseira_dir">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="luzDianteira">Luz Dianteira</label>
<select type="text" name="luzDianteira" id="luzDianteira">
    @foreach($Condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="luzTraseira">Luz Traseira</label>
<select type="text" name="luzTraseira" id="luzTraseira">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="parachoqueTraseiro">Parachoque Traseiro</label>
<select type="text" name="parachoqueTraseiro" id="parachoqueTraseiro">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="capoTraseiro">capo Traseiro</label>
<select type="text" name="capoTraseiro" id="capoTraseiro">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="giroflex">Giroflex</label>
<select type="text" name="giroflex" id="giroflex">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="vidro">Vidros</label>
<select type="text" name="vidro" id="vidro">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="interno">Interno</label>
<select type="text" name="interno" id="interno">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="impressoara">Impressora</label>
<select type="text" name="impressoara" id="impressoara">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="smartphone">Smartphone</label>
<select type="text" name="smartphone" id="smartphone">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<label for="motor">Motor</label>
<select type="text" name="motor" id="motor">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}">
            {{$item->descricao}}                                                       
        </option>  
        @endforeach 
</select>
<br>

<button type="submit" name="acao" value="salvar"
id="acao"> @if(isset($carrocheck->ocorrencia)) Alterar @else Salvar @endif
</button> 