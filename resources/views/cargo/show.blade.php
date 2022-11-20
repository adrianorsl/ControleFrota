<x-layout titulo="Cargo">
    <ul>
        <label for="id">ID</label>
        <input type="text" name="id" id="id"
        value="{{ $cargo->id }}" disabled><br>
        <label for="descricao">Cargo</label>
        <input type="text" name="descricao" id="descricao"
        value="{{ $cargo->descricao }} "><br>
        <a href="{{ route('cargo.edit', $cargo->id) }}"><button>Editar</button></a>

    </ul>
</x-layout>