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
        $data = ['anotacao'=>Anotacao::find($id)];
        return view('anotacao.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){

        // $dados = $request->all();
        // $dados['importado'] = $request->has('importado');
        $dados = $request->all();
        if(!Anotacao::find($id)->update($dados))
            dd("Erro!!!");

        return redirect('/anotacaos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        // if(Anotacao::find($id)->delete())
        //     return redirect('/anotacaos');
        // else dd($id);

        return view('anotacao.remove',[
            'anotacao'=> Anotacao::find($id)
        ]);
    }

    public function remove(Request $request, $id)
    {
        if($request->confirmar==="Remover")
            if(!Anotacao::destroy($id))
                dd("erro ao deletar anotacao $id !");
        return redirect('/anotacaos');
    }
}
