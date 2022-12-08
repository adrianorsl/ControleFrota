<?php
    use App\Models\TipoArma;
    use App\Models\Veiculo;
    $tipoArma = TipoArma::all();   
    $veiculo = Veiculo::all();   
?>

<x-layout titulo="Check-list">
    <ul>
    <div class="py-4">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Data de Inicio</th>
                <th scope="col">Data Final</th>
                <th scope="col">Veículo</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $ocorrencia->id }}</th>
                <td>{{ $ocorrencia->dataInicio }}</td>
                <td>{{ $ocorrencia->dataFim }}</td>
                <?php $veiculo = Veiculo::find($ocorrencia->veiculo_id) ?>
                <td>{{ $veiculo->numero }}</td>
                <td><form id="form_delete" name="form_delete" action="{{ route('ocorrencia.destroy', $ocorrencia->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Excluir</button>
            </tr>
    </div>
    </ul>
</x-layout>