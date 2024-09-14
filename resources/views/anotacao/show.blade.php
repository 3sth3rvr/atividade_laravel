<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anotação</title>
</head>
<body>
    @if ($anotacao)
        <h1>{{$anotacao->Titulo}}</h1>
        <p>{{$anotacao->Conteudo}}</p>
        <h5>{{$anotacao->dia}}</h5>
    @else
        <p>Anotações não encontradas! </p>
    @endif
    <a href="/anotacaos">&#9664;Voltar</a>
</body>
</html>
