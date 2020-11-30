<?php

namespace App\Http\Controllers;

use App\Cidade;
use App\Estado;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index()
    {
        try {
            $cidades = Cidade::paginate(2);
            return view('cidades.index', compact('cidades'));
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function cadastrar()
    {
        $estados = Estado::all();

        return view('cidades.form', compact('estados'));
    }
    public function insert(Request $request)
    {
        Cidade::create($request->all());
        return redirect('cidades');
    }
    public function editar(Cidade $cidade)
    {

        $cidade = Cidade::where('id', $cidade->id)->first();
        $estados = Estado::all();
        return view('cidades.form', compact('cidade', 'estados'));
    }
    public function update(Request $request, $id)
    {
        $cidade = Cidade::findOrFail($id);
        $formRequest = $request->all();
        $update =  $cidade->update($formRequest);

        return redirect('cidades');
    }
    public function deletar($id)
    {
        $cidade = Cidade::findOrFail($id);
        $cidade->delete();
        return redirect('cidades');
    }
}
