<?php
    use App\Models\Condicao;
    $condicao = Condicao::all();  


?>

<x-layout titulo="Carro check">
    <a href={{ route("carrocheck.create") }} class="btn btn-primary" >Adicionar</a>
        <div class="py-4">
            <form action="{{ route('carrocheck.index') }}" method="get">
                @method('GET')
                <input type="text" name="find" id="find"><input type="submit" value="OK">
            </form>
        </div>
    <div class="py-4">
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
                <th scope="col">Detalhes</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carrocheck as $item)
                <tr><td>{{$item->id}}</td>
                    <?php
                        $condicao = Condicao::find($item->capo);
                    ?>
                    <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->paralamaDianteiro_esq);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->paralamaDianteiro_dir);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->paralamaTraseiro_esq);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->paralamaTraseiro_dir);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->parachoqueDianteiro);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->portaDianteira_esq);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->portaDianteira_dir);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->portaTraseira_esq);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->portaTraseira_dir);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->luzDianteira);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->luzTraseira);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->parachoqueTraseiro);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->capoTraseiro);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->giroflex);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->vidro);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->interno);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->impressora);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->smartphone);
                    ?>
                      <td>{{$condicao->nome}}</td>
                    <?php
                        $condicao = Condicao::find($item->motor);
                    ?>
                      <td>{{$condicao->nome}}</td>

                   
            
            <td><a href="{{ route('carrocheck.show', $item->id) }}"><button type="button" class="btn btn-info">Detalhes</button></a></td>
            <td><form id="form_delete" name="form_delete" action="{{ route('carrocheck.destroy', $item->id)}}" 
                method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Excluir</button>
                </form></td></tr>    
            @endforeach
        </tbody>
        </table>       
    </div> 
        {{ $carrocheck ?? ''->appends([
            'find' => request()->get('find','')
        ])->links() }}
    </ul>
</x-layout>