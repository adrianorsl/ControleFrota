<x-layout titulo="Tipo da Arma">
    <ul>
        <form action="{{ route('tipoArma.update', $tipoArma->id) }}" method="post">
            @method("PATCH")
            @csrf
            @include('tipoArma.form')

        </form>
    </ul>

</x-layout>