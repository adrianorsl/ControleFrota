<?php 
    use App\Models\TipoArma;
    use App\Models\Armas;
    $tipoArma = TipoArma::all();
    $armas = new Armas();
?>

<x-layout titulo="Armas">
    <ul>
        <form action= "{{ route('arma.update', $armas->id) }}" method="post">
            @method("PATCH")
            @csrf
            @include('armas.form')

        </form>
    </ul>

</x-layout>