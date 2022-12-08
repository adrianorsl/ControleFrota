<x-layout titulo="Novo Tipo de Munição">

    <form action=" {{ route('municoes.store') }}" method="post">
        @method("POST")
        @csrf

        @include('municoes.form')
    </form>

</x-layout>