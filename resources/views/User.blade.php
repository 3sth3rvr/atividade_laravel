<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    {{-- <h1>pipipipopopopo</h1> --}}
</div>

<tbody>
    @foreach ($anotacaos as $anotacao)
    <tr>
        <td>{{$anotacao->id}}</td>
        <td>{{$anotacao->name}}</td>
        <td>{{$anotacao->email}}</td>
        <td>{{$anotacao->password}}</td>
    </tr>
    @endforeach
</tbody>
