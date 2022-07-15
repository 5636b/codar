<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Lista de Nomes <a href="{{ route('event.create') }}">+</a></h1>
    <ul>
        @foreach ($eventos as $evento)
            <li>
                {{ $evento->title }} --
                {{ $evento->description }} --
                {{ $evento->city }} --
                {{ $evento->private }}
                | <a href="{{ route('event.show', ['id' => $evento->id]) }}">Detalhes</a>
                | <a href="{{ route('event.edit', ['id' => $evento->id]) }}">Editar</a>
            </li>
        @endforeach
    </ul>
</body>

</html>
