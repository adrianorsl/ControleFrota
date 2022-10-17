<?php 
    use App\Models\TipoArma;
    use App\Models\Armas;
    $tipoArma = TipoArma::all();
    $armas = new Armas();
?>

<x-layout titulo="Nova Arma">

    <form action=" {{ route('arma.store') }}" method="post">
        @method("POST")
        @csrf

        @include('armas.form')
        
    </form>

</x-layout>