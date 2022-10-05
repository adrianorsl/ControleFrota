<x-layout titulo="Condição">
    <ul>
        <label for="id">ID</label>
        <input type="text" name="id" id="id"
        value="{{ $condicao->id }}" disabled><br>
        <label for="nome">Condição</label>
        <input type="text" name="nome" id="nome"
        value="{{ $condicao->nome }} "><br>
        <a href="{{ route('condicao.edit', $condicao->id) }}"><button>Editar</button></a>

    </ul>
</x-layout>