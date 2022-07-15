<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Informações de usuário</h1>
    
    <ul>
        <li>{{ $eventos->title }}</li>
        <li>{{ $eventos->description }}</li>
        <li>{{ $eventos->city }}</li>
        <li>{{ $eventos->private }}</li>

        <form action="{{ route('event.destroy', $eventos->id) }}" method="post">
            @method('DELETE')
            @csrf
    
            <button type="submit">Remover</button>
        </form>
    </ul>
</body>

</html>
