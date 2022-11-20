<x-layout titulo="Tipo da Arma">
    <ul>
        <label for="id">ID</label>
        <input type="text" name="id" id="id"
        value="{{ $tipoArma->id }}" disabled><br>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"
        value="{{ $tipoArma->nome }} "><br>
        <a href="{{ route('tipoArma.edit', $tipoArma->id) }}"><button>Editar</button></a>

    </ul>
</x-layout>