<x-layout titulo="Veículo">
    <ul>
        <form action="{{ route('veiculo.update', $veiculo->id) }}" method="post">
            @method("PATCH")
            @csrf
            @include('veiculo.form')

        </form>
    </ul>

</x-layout>