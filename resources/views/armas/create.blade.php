<x-layout titulo="Nova Arma">

    <form action=" {{ route('armas.store') }}" method="post">
        @method("POST")
        @csrf

        @include('armas.form')
    </form>

</x-layout>