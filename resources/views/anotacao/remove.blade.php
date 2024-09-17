<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anotacoes</title>
</head>
<body>
    @if ($anotacao)
        <h1>{{ $anotacao->Titulo }}</h1>
        <p>{{ $anotacao->Conteudo }}</p>
        <p>{{ $anotacao->data }}</p>
        <table>
            <tr>
                <td>
                    <form action="{{ route('remove',$anotacao->id) }}" method='post'>
                        @csrf
                        <input type="submit" name='confirmar' value="Remover" />
                    </form>
                </td>
                <td>
                    <a href="/anotacaos"><button>Cancelar</button></a>
                </td>
            </tr>
        </table>
    @else
        <p>anotacaos não encontrados! </p>
    @endif
    <a href="/anotacaos">&#9664;Voltar</a>
</body>
</html>
