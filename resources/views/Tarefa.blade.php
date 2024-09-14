<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    {{-- <h1>pipipipopopopo</h1> --}}
</div>

<tbody>
    @foreach ($anotacaos as $anotacao)
    <tr>
        <td>{{$anotacao->id}}</td>
        <td>{{$anotacao->Nome}}</td>
        <td>{{$anotacao->data}}</td>
    </tr>
    @endforeach
</tbody>
