<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Treinaweb</span>
    </div>
</nav>

<div class="container">
    <div class="card">
        <h5 class="card-header">Detalhes do cliente {{$client->name}}</h5>
        <div class="card-body">
            <p class="card-text"><strong>ID:</strong> {{$client->id}}</p>
            <p class="card-text"><strong>Nome:</strong> {{$client->name}}</p>
            <p class="card-text"><strong>Endereço:</strong> {{$client->address}}</p>
            <p class="card-text"><strong>Observação:</strong> {{$client->observation}}</p>
            <a href="{{route("clients.index")}}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
