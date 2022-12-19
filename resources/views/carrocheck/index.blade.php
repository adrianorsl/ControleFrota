<?php
    use App\Models\Condicao;
    $condicao = Condicao::all();  


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<x-layout titulo="Carro check">
  <body>
    @foreach($carrocheck as $item)
    <a href={{ route("carrocheck.create") }} class="btn btn-primary" >Adicionar</a>
    <a href="{{ route('carrocheck.show', $item->id) }}"><button type="button" class="btn btn-info">Detalhes</button></a>
    <a><form id="form_delete" name="form_delete" action="{{ route('carrocheck.destroy', $item->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Excluir</button>
                </form></a>  
    @endforeach
        <div class="py-4">
            <form action="{{ route('carrocheck.index') }}" method="get">
                @method('GET')
                <input type="text" name="find" id="find"><input type="submit" value="OK">
            </form>
        </div>
</body>
    <body class="p-3 m-0 border-0 bd-example bd-example-row">
    <div class="container text-center">
      <div class="row">
      @foreach($carrocheck as $item)
        <div class="col-6 col-sm-3">Ocorrencia: {{$item->id}}</div>
          <?php
            $condicao = Condicao::find($item->capo);
          ?>
        <div class="col-6 col-sm-3">Capo: {{$condicao->nome}}</div>
          <?php
            $condicao = Condicao::find($item->paralamaDianteiro_esq);
          ?>
        <div class="col-6 col-sm-3">Paralama Dianteiro Esquerdo: {{$condicao->nome}}</div>
          <?php
            $condicao = Condicao::find($item->paralamaDianteiro_dir);
          ?>
        <div class="col-6 col-sm-3">Paralama Dianteiro Direito: {{$condicao->nome}}</div>
          <?php
            $condicao = Condicao::find($item->paralamaTraseiro_esq);
          ?>
        <div class="col-6 col-sm-3">Paralama Traseiro Esquerdo: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($item->paralamaTraseiro_dir);
          ?>
        <div class="col-6 col-sm-3">Paralama Traseiro Direito: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($item->parachoqueDianteiro);
          ?>
        <div class="col-6 col-sm-3">Parachoque Dianteiro: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($item->portaDianteira_esq);
          ?>
        <div class="col-6 col-sm-3">Porta Dianteira Esquerda: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($item->portaDianteira_dir);
          ?>
        <div class="col-6 col-sm-3">Porta Dianteira Direita: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($item->portaTraseira_esq);
          ?>
        <div class="col-6 col-sm-3">Porta Traseira Esquerda: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($item->portaTraseira_dir);
          ?>
        <div class="col-6 col-sm-3">Porta Traseira Direita: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($item->luzDianteira);
          ?>
        <div class="col-6 col-sm-3">Luzes Dianteira: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($item->luzTraseira);
          ?>
        <div class="col-6 col-sm-3">Luzes Traseira: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($item->parachoqueTraseiro);
          ?>
        <div class="col-6 col-sm-3">Parachoque Traseiro: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($item->capoTraseiro);
          ?>
        <div class="col-6 col-sm-3">Capo Traseiro: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($item->giroflex);
          ?>
        <div class="col-6 col-sm-3">GiroFlex: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($item->vidro);
          ?>
        <div class="col-6 col-sm-3">Vidros: {{$condicao->nome}}</div>
        <?php
            $condicao = Condicao::find($item->interno);
          ?>
        <div class="col-6 col-sm-3">Interno: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($item->impressora);
          ?>
        <div class="col-6 col-sm-3">Impressora: {{$condicao->nome}}</div>
        <?php
            $condicao = Condicao::find($item->smartphone);
          ?>
        <div class="col-6 col-sm-3">Smartphone: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($item->motor);
          ?>
        <div class="col-6 col-sm-3">Motor: {{$condicao->nome}}</div>
      @endforeach    
    </div> 
        {{ $carrocheck ?? ''->appends([
            'find' => request()->get('find','')
        ])->links() }}
    </ul>
        </body>
</x-layout>