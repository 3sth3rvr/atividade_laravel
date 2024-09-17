<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Insert new Produto</h1>
    <form action="{{route('anotacaoUpdate',$anotacao->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Titulo:</td>
                <td><input type="text" name="titulo" value="{{$anotacao->Titulo}}"/></td>
            </tr>
            <tr>
                <td>Conteudo:</td>
                <td><textarea name="conteudo" id="" cols="30" rows="10">{{$anotacao->Conteudo}}</textarea></td>
            </tr>
            <tr>
                <td>Data:</td>
                <td><input type="date" name="dia" value="{{$anotacao->dia}}"/></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="Salvar"/>
                    <a href="/anotacaos"><button form=cancel >Cancelar</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
