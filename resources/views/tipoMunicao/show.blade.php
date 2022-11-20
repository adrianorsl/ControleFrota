<x-layout titulo="Tipo da Munição">
    <ul>
        <label for="id">ID</label>
        <input type="text" name="id" id="id"
        value="{{ $tipoMunicao->id }}" disabled><br>
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao"
        value="{{ $tipoMunicao->descricao }} "><br>
        <a href="{{ route('tipoMunicao.edit', $tipoMunicao->id) }}"><button>Editar</button></a>

    </ul>
</x-layout>