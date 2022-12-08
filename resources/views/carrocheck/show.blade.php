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
                <th scope="col">Usuario</th>
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
                <th scope="row">{{ $ocorrencia->id }}</th>
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
    </div>
    </ul>
    <ul>
    <div class="py-3">
        <table class="table table-success table-striped">
        <thead>
            <tr>
            <th scope="col">Ocorrencia</th>
                <th scope="col">Capo</th>
                <th scope="col">Paralama Dianteiro Esquerdo</th>
                <th scope="col">Paralama Dianteiro Direito</th>
                <th scope="col">Paralama Traseiro Esquerdo</th>
                <th scope="col">Paralama Traseiro Direito</th>
                <th scope="col">Parachoque Dianteiro</th>
                <th scope="col">Porta Dianteira Esquerda</th>
                <th scope="col">Porta Dianteira Direita</th>
                <th scope="col">Porta Traseira Esquerda</th>
                <th scope="col">Porta Traseira Direita</th>
                <th scope="col">Luzes Dianteira</th>
                <th scope="col">Luzes Traseira</th>
                <th scope="col">Parachoque Traseiro</th>
                <th scope="col">Capo Traseiro</th>
                <th scope="col">GiroFlex</th>
                <th scope="col">Vidros</th>
                <th scope="col">Interno</th>
                <th scope="col">Impressora</th>
                <th scope="col">Smartphone</th>
                <th scope="col">Motor</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $carrocheck->id }}</th>
                    <?php
                        $condicao = Condicao::find($carrocheck->capo);
                    ?>
                    <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->paralamaDianteiro_esq);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->paralamaDianteiro_dir);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->paralamaTraseiro_esq);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->paralamaTraseiro_dir);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->parachoqueDianteiro);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->portaDianteira_esq);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->portaDianteira_dir);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->portaTraseira_esq);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->portaTraseira_dir);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->luzDianteira);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->luzTraseira);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->parachoqueTraseiro);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->capoTraseiro);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->giroflex);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->vidro);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->interno);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->impressora);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->smartphone);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($carrocheck->motor);
                    ?>
                      <td>{{$condicao->nome}}</td>
                <td><form id="form_delete" name="form_delete" action="{{ route('carrocheck.destroy', $carrocheck->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Excluir</button>
            </tr>
    </div>
    </ul>
</x-layout>
