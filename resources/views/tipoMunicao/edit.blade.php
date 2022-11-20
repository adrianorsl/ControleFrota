<x-layout titulo="Tipo da Munição">
    <ul>
        <form action="{{ route('tipoMunicao.update', $tipoMunicao->id) }}" method="post">
            @method("PATCH")
            @csrf
            @include('tipoMunicao.form')

        </form>
    </ul>

</x-layout>