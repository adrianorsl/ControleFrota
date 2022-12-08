<?php
    use App\Models\TipoArma;
    use App\Models\Veiculo;
    $tipoArma = TipoArma::all();   
    $veiculo = Veiculo::all(); 
?>

<x-layout titulo="Check-list">
    <a href= {{ route('ocorrencia.create') }} class="btn btn-primary"> Adicionar</a>
    <div class="py-4">
        <form action="{{ route('ocorrencia.index') }}" method="get">
            @method('GET')
            <input type="text" name="find" id="find"><input type="submit" value="OK">
        </form>
    </div>
    <div class="py-4">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Data de Inicio</th>
                <th scope="col">Data Final</th>
                <th scope="col">Veículo</th>
                <th scope="col">Detalhes</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ocorrencia as $item)
                <tr><td>{{$item->id}}</td>
                    <td>{{$item->dataInicio}}</td>
                    <td>{{$item->dataFim}}</td>
                    <?php
                        $veiculo = Veiculo::find($item->veiculo_id);
                    ?>
                    <td>{{$veiculo->numero}}</td>
            
            <td><a href="{{ route('ocorrencia.show', $item->id) }}"><button type="button" class="btn btn-info">Detalhes</button></a></td>
            <td><form id="form_delete" name="form_delete" action="{{ route('ocorrencia.destroy', $item->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Excluir</button>
                </form></td></tr>    
                  
            @endforeach   
        </tbody>
        </table>       
    </div> 
        {{ $ocorrencia->appends([
            'find' => request()->get('find','')
        ])->links() }}
</x-layout>

