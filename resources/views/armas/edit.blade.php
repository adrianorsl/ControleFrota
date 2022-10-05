<x-layout titulo="Armas>
    <ul>
        <form action="{{ route('armas.update', $armas->id) }}" method="post">
            @method("PATCH")
            @csrf
            @include('armas.form')

        </form>
    </ul>

</x-layout>