<?php

namespace App\Http\Controllers;
use App\Models\Anotacao;
use Illuminate\Http\Request;

class AnotacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    return response()->json(Anotacao::all());
        return view('anotacao.index', ['anotacaos'=>Anotacao::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anotacao.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newAnotacao = $request->all();

        if (Anotacao::create($newAnotacao) )
            return redirect('/anotacaos');
        else
            dd("Erro ao inserir nov anotacao!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('anotacao.show',[
            'anotacao'=> Anotacao::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('anotacao.edit',[
            "anotacao"=>Anotacao::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){

        $dados = $request->all();
        // $dados['importado'] = $request->has('importado');

        if(!Anotacao::find($id)->update($dados))
            dd("Erro!!!");

        return redirect('/anotacaos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        if(Anotacao::find($id)->delete())
            return redirect('/anotacaos');
        else dd($id);
    }

    public function destroy(string $id)
    {
        if($request->confirmar==="deletar")
            if(!Anotacao::destroy($id))
                dd("erro ao deletar anotacao $id !");
        return redirect('/anotacaos');
    }
}
