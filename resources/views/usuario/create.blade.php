<?php 
    use App\Models\Cargo;
    use App\Models\Usuario;
    $cargo = new Cargo();
    $cargo = Cargo::all();
    $usuariio = new Usuario();
 
?>
 
<x-layout titulo="Novo Usuario">

    <form action=" {{ route('usuario.store') }}" method="post">
        @method("POST")
        @csrf

        @include('usuario.form')
    </form>
   
</x-layout>