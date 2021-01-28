<?php

namespace App\Http\Controllers;

use App\Events\Event;
use App\Models\Reservas;
use Illuminate\Http\Request;

class ReservaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reservas::all();
        return view('reservas.index', compact('reservas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservas = new Reservas();
        $reservas->data_saida = $request->input('novaDataS');
        $reservas->hora_saida = $request->input('novaHoraS');
        $reservas->data_entrada = $request->input('novaDataE');
        $reservas->hora_entrada = $request->input('novaHoraE');
        $reservas->clientes_id = $request->input('novoIdCliente');
        $reservas->veiculo_id = $request->input('novoIdVeiculo');
        $reservas->save();
        event(new Event("Cliente {{$reservas->clientes_id}} reservou um novo veiculo "));
        return redirect('/reservas');

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
        $reservas = Reservas::find($id);
        if (isset($reservas)){
            return view('reservas.edit',compact('reservas')); 
        }
        return redirect('/reservas');
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
        $reservas = Reservas::find($id);
        if (isset($reservas)){
            $reservas->data_saida = $request->input('novaDataS');
            $reservas->hora_saida = $request->input('novaHoraS');
            $reservas->data_entrada = $request->input('novaDataE');
            $reservas->hora_entrada = $request->input('novaHoraE');
            $reservas->clientes_id = $request->input('novoIdCliente');
            $reservas->veiculo_id = $request->input('novoIdVeiculo');
            $reservas->save();
        }
        return redirect('/reservas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservas = Reservas::find($id);
        if (isset($reservas)){
            $reservas->delete();
            return redirect('/reservas');
        } 
    }
}
