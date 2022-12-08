<x-layout titulo="Check-List">
    <ul>
        <form action="{{ route('ocorrencia.update', $ocorrencia->id) }}" method="post">
            @method("PATCH")
            @csrf
            @include('ocorrencia.form')

        </form>
    </ul>

</x-layout>