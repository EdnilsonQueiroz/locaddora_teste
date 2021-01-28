<?php

namespace App\Http\Controllers;

use App\Models\Veiculos;
use Illuminate\Http\Request;

class VeiculoControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculos = Veiculos::all();
        return view('veiculos.index', compact('veiculos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('veiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $veiculos = new Veiculos();
        $veiculos->modelo = $request->input('novoModelo');
        $veiculos->marca = $request->input('novaMarca');
        $veiculos->ano = $request->input('novoAno');
        $veiculos->placa = $request->input('novaPlaca');
        $veiculos->save();
        return redirect('/veiculos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veiculos = Veiculos::find($id);
        if (isset($veiculos)){
            return view('veiculos.edit',compact('veiculos')); 
        }
        return redirect('/veiculos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $veiculos = Veiculos::find($id);
        if (isset($veiculos)){
            $veiculos->modelo = $request->input('novoModelo');
            $veiculos->marca = $request->input('novaMarca');
            $veiculos->ano = $request->input('novoAno');
            $veiculos->placa = $request->input('novaPlaca');
            $veiculos->save();
        }
        return redirect('/veiculos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veiculos = Veiculos::find($id);
        if (isset($veiculos)){
            $veiculos->delete();
            return redirect('/veiculos');
        } 
    }
}
