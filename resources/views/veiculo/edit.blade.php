<x-layout titulo="Veículo">
    <ul>
        <form action="{{ route('veiculo.update', $veiculo->id) }}" method="post">
            @method("PATCH")
            @csrf
            @include('veiculo.formEdit')

        </form>
    </ul>

</x-layout>