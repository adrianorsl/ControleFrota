<?php
    use App\Models\TipoArma;
    $tipoArma = TipoArma::all();   
?>

<x-layout titulo="Arma">
    <ul>
    <div class="py-4">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Número</th>
                <th scope="col">Tipo da Arma</th>
                <th scope="col">Alterar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $armas->id }}</th>
                <td>{{ $armas->numero }}</td>
                <?php $tipoArma = TipoArma::find($armas->tipo_id) ?>
                <td>{{ $tipoArma->nome }}</td>
                <td><a href="{{ route('arma.edit', $armas->id) }}"><button type="button" class="btn btn-warning">Editar</button></a></td>
                <td><form id="form_delete" name="form_delete" action="{{ route('arma.destroy', $armas->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Excluir</button>
            </tr>

       

    </ul>
</x-layout>