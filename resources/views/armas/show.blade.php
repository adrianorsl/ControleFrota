<x-layout titulo="Arma">
    <ul>
        <label for="id">ID</label>
        <input type="text" name="id" id="id"
        value="{{ $armas->id }}" disabled><br>
        <label for="numero">Numero</label>
        <input type="text" name="numero" id="numero"
        value="{{ $armas->numero }} "><br>
        <a href="{{ route('armas.edit', $armas->id) }}"><button>Editar</button></a>

    </ul>
</x-layout>