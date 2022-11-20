<x-layout titulo="Novo Cargo">

    <form action=" {{ route('cargo.store') }}" method="post">
        @method("POST")
        @csrf

        @include('cargo.form')
    </form>

</x-layout>