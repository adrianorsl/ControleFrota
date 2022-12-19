<?php
     use App\Models\Condicao;
     use App\Models\Ocorrencia;
     use App\Models\Veiculo;
     use App\Models\Usuario;
     use App\Models\Armas;
     use App\Models\Municoes;
     use App\Models\Armas_ocor_municoes;
     use App\Models\Usuario_has_ocorrencia;
     $ocorrencia = Ocorrencia::find($carrocheck->id);
     $usuarioOco = Usuario_has_ocorrencia::where('ocorrencia_id', $ocorrencia->id)->first();
     $arma_oco_mun = Armas_ocor_municoes::where('ocorrencia_id', $ocorrencia->id)->first();
?>

<x-layout titulo="Carro check">
<ul>
    <div class="py-4">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Motorista</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php $usuario = Usuario::find($usuarioOco->usuario_id) ?>
                <td>{{ $usuario->nome }}</td>
            </tr>
    </div>
</ul>
<ul>
    <div class="py-4">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Data de Inicio</th>
                <th scope="col">Data Final</th>
                <th scope="col">Veículo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th> {{ $ocorrencia->id }}</th>
                <td>{{ $ocorrencia->dataInicio }}</td>
                <td>{{ $ocorrencia->dataFim }}</td>
                <?php $veiculo = Veiculo::find($ocorrencia->veiculo_id) ?>
                <td>{{ $veiculo->numero }}</td>
            </tr>
    </div>
    </ul>
    <ul>
    <div class="py-4">
        <table class="table table-success table-striped">
          <thead>
              <tr>
                  <th scope="col">Arma</th>
                  <th scope="col">Munições</th>
          </thead>
            <tbody>
              <tr>
                  <?php $arma = Armas::find($arma_oco_mun->armas_id) ?>
                  <td>{{ $arma->nome }}</td>
                  <?php $municao = Municoes::find($arma_oco_mun->municoes_id) ?>
                  <td>{{ $municao->quantidade }}</td>
              </tr>
            </tbody>
        </table>
    </div>
  </ul>
    <div class="container text-center">
      <div class="row">
        <div class="col-6 col-sm-3">Ocorrencia: {{$carrocheck->id}}</div>
          <?php
            $condicao = Condicao::find($carrocheck->capo);
          ?>
        <div class="col-6 col-sm-3">Capo: {{$condicao->nome}}</div>
          <?php
            $condicao = Condicao::find($carrocheck->paralamaDianteiro_esq);
          ?>
        <div class="col-6 col-sm-3">Paralama Dianteiro Esquerdo: {{$condicao->nome}}</div>
          <?php
            $condicao = Condicao::find($carrocheck->paralamaDianteiro_dir);
          ?>
        <div class="col-6 col-sm-3">Paralama Dianteiro Direito: {{$condicao->nome}}</div>
          <?php
            $condicao = Condicao::find($carrocheck->paralamaTraseiro_esq);
          ?>
        <div class="col-6 col-sm-3">Paralama Traseiro Esquerdo: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->paralamaTraseiro_dir);
          ?>
        <div class="col-6 col-sm-3">Paralama Traseiro Direito: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->parachoqueDianteiro);
          ?>
        <div class="col-6 col-sm-3">Parachoque Dianteiro: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->portaDianteira_esq);
          ?>
        <div class="col-6 col-sm-3">Porta Dianteira Esquerda: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->portaDianteira_dir);
          ?>
        <div class="col-6 col-sm-3">Porta Dianteira Direita: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->portaTraseira_esq);
          ?>
        <div class="col-6 col-sm-3">Porta Traseira Esquerda: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->portaTraseira_dir);
          ?>
        <div class="col-6 col-sm-3">Porta Traseira Direita: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->luzDianteira);
          ?>
        <div class="col-6 col-sm-3">Luzes Dianteira: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->luzTraseira);
          ?>
        <div class="col-6 col-sm-3">Luzes Traseira: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->parachoqueTraseiro);
          ?>
        <div class="col-6 col-sm-3">Parachoque Traseiro: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->capoTraseiro);
          ?>
        <div class="col-6 col-sm-3">Capo Traseiro: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->giroflex);
          ?>
        <div class="col-6 col-sm-3">GiroFlex: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->vidro);
          ?>
        <div class="col-6 col-sm-3">Vidros: {{$condicao->nome}}</div>
        <?php
            $condicao = Condicao::find($carrocheck->interno);
          ?>
        <div class="col-6 col-sm-3">Interno: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->impressora);
          ?>
        <div class="col-6 col-sm-3">Impressora: {{$condicao->nome}}</div>
        <?php
            $condicao = Condicao::find($carrocheck->smartphone);
          ?>
        <div class="col-6 col-sm-3">Smartphone: {{$condicao->nome}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->motor);
          ?>
        <div class="col-6 col-sm-3">Motor: {{$condicao->nome}}</div>
      </div>
    </div>
</x-layout>
