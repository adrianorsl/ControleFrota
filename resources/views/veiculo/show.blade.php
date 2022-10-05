<x-layout titulo="Veículo">
    <ul>
        <label for="id">ID</label>
        <input type="text" name="id" id="id"
        value="{{ $veiculo->id }}" disabled><br>
        <label for="placa">Placa</label>
        <input type="text" name="placa" id="placa"
        value="{{ $veiculo->placa }} "disabled><br>
        <label for="numero">Número</label>
        <input type="text" name="numero" id="numero"
        value="{{ $veiculo->numero }} "><br>
        <label for="km">KM</label>
        <input type="text" name="km" id="km"
        value="{{ $veiculo->km }} "><br>
        <a href="{{ route('veiculo.edit', $veiculo->id) }}"><button>Editar</button></a>

    </ul>
</x-layout>