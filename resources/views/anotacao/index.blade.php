<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anotações</title>
</head>
<body>
    <h1>Anotações</h1>
    @if ($anotacaos->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Conteúdo</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anotacaos as $anotacao)
            <tr>
                {{-- <td>{{($produto->importado)?'Sim':'Não'}}</td> --}}
                <td><a href="/anotacao/{{$anotacao->id}}">{{$anotacao->id}}</a></td>
                <td>{{$anotacao->Titulo}}</td>
                <td>{{$anotacao->Conteudo}}</td>
                <td>{{$anotacao->dia}}</td>
                <td>
                    <a href="{{route('anotacaoDelete',$anotacao->id)}}" tittle='Deletar'>&#128465</a>
                    <a href="{{route('anotacaoEdit',$anotacao->id)}}" tittle='Editar'>&#128465</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <a href="/anotacao">&#9664;Criar</a>
    </table>
    @else
    <p>Produtos não encontrados! </p>
    @endif
</body>
</html>


