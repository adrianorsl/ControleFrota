<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $titulo }} </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/tipoArma">Tipo da Arma</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/arma">Armas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/tipoMunicao">Tipo de Munições</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" /municoes">Munições</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link active" aria-current="page" href="/cargo">Cargos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/usuario">Usuario</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/condicao">Condição</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" /veiculo">Veiculo</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" /ocorrencia">CheckList</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" /carrocheck">Carrocheck</a>
            </li>
           
        </ul>
        </div>
        </div>
    </nav>
    
    <div class="container">
        <h1>{{ $titulo }}</h1>

        {{ $slot }}

        
    </div>
</body>
</html>
