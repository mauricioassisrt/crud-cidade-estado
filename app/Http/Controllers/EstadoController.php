<?php

namespace App\Http\Controllers;

use App\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        try {
            $estados = Estado::paginate(2);
            return view('estados.index', compact('estados'));
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function cadastrar()
    {
        return view('estados.form');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        Estado::create($request->all());
        return redirect('estados');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function editar(Estado $estado)
    {
        $estado = Estado::findOrFail($estado->id);

        return view('estados.form', compact('estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estado = Estado::findOrFail($id);
        $formRequest = $request->all();
        $update =  $estado->update($formRequest);

        return redirect('estados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function deletar($id)
    {
        $estado = Estado::findOrFail($id);
        $estado->delete();
        return redirect('estados');
    }
}
