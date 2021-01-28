<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Clientes();
        $cat->nome = $request->input('novoCliente');
        $cat->cpf = $request->input('novoCpf');
        $cat->save();
        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('clientes.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Clientes::find($id);
        if (isset($clientes)){
            return view('clientes.edit',compact('clientes')); 
        }
        return redirect('/clientes');
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
        $clientes = Clientes::find($id);
        if (isset($clientes)){
            $clientes->nome = $request->input('novoCliente');
            $clientes->cpf = $request->input('novoCpf');
            $clientes->save();
        }
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = Clientes::find($id);
        if (isset($clientes)){
            $clientes->delete();
            return redirect('/clientes');
        } 
        
    }
}
