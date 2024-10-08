<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeremias Teste</title>
</head>
<body>
    <p> Com "blade" a escrita de PHP dentro do HTML fica facilitado </p>
    @foreach(range(1, 20) as $key)
        <li>{{ $key }}</li>
    @endforeach

    Posso criar diretrizes também
    @auth
        <span>Você está autenticado</span>
    @endauth

</body>
</html>
