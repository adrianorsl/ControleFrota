<x-layout titulo="Condição">
    <ul>
        <form action="{{ route('condicao.update', $condicao->id) }}" method="post">
            @method("PATCH")
            @csrf
            @include('condicao.form')

        </form>
    </ul>

</x-layout>