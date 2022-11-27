<x-layout titulo="Tipo da Arma">

    <form action=" {{ route('tipoArma.store') }}" method="post">
        @method("POST")
        @csrf
        
        @include('tipoArma.form')
    </form>

</x-layout>
