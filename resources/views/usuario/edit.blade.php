
<x-layout titulo="Usuarios">
    <ul>
        <form action= "{{ route('usuario.update', $usuario) }}" method="post">
            @method("PATCH")
            @csrf
            @include('usuario.form')

        </form>
    </ul>

</x-layout>