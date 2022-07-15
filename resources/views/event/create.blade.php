<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Novo Evento</h1>

    <form action="{{ route('event.store') }}" method="post">
        @csrf
        @include('event.diretorio.form')
    </form>
</body>

</html>
