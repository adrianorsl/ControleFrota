<x-layout titulo="Tipo da Munição">
    <ul>
        <form action="{{ route('municoes.update', $municoes->id) }}" method="post">
            @method("PATCH")
            @csrf
            @include('municoes.form')

        </form>
    </ul>

</x-layout>