<x-layout titulo="Cargo">
    <ul>
        <form action="{{ route('cargo.update', $cargo->id) }}" method="post">
            @method("PATCH")
            @csrf
            @include('cargo.form')

        </form>
    </ul>

</x-layout>