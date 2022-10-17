
<x-layout titulo="Carro check">
    <ul>
        <form action= "{{ route('carrocheck.update', $carrocheck) }}" method="post">
            @method("PATCH")
            @csrf
            @include('carrocheck.form')

        </form>
    </ul>

</x-layout>