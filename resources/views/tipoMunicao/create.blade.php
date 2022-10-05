<x-layout titulo="Novo Tipo de Munição">

    <form action=" {{ route('tipoMunicao.store') }}" method="post">
        @method("POST")
        @csrf

        @include('tipoMunicao.form')
    </form>

</x-layout>