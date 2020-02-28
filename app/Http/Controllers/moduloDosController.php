<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\modulo2;

class moduloDosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return (DB::table('modulo2')
            ->join('expedientes', 'modulo2.id_expediente', '=', 'expedientes.id_expediente')
            ->select('modulo2.*', 'expedientes.numero_expediente')
            ->orderBy('numero_expediente', 'asc')
            ->paginate(5));
        }else{
            return view('secretario', compact('modulo2'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modulodos = new modulo2();
        $modulodos->id_expediente = $request->id_expediente;
        $modulodos->monto_demandado = $request->monto_demandado;
        $modulodos->fecha_emision= $request->fecha_emision;
        $modulodos->tipo_acuerdo = $request->tipo_acuerdo;
        $modulodos->subsana_prevencion= $request->subsana_prevencion;
        $modulodos->contestacion_demanda= $request->contestacion_demanda;
        $modulodos->fecha_no_contesta= $request->fecha_no_contesta;
        $modulodos->si_contesta= $request->si_contesta;
        $modulodos->fecha_si_contesta= $request->fecha_si_contesta;
        $modulodos->reconviene_demanda= $request->reconviene_demanda;
        $modulodos->fecha_reconviene= $request->fecha_reconviene;
        $modulodos->contesta_reconvenido= $request->contesta_reconvenido;
        $modulodos->numero_acuerdos= $request->numero_acuerdos;
        $modulodos->user_id = auth()->id();
        $modulodos->save();

        return $modulodos;
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
        //
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
        $modulodos = modulo2::find($id);
        $modulodos->id_expediente = $request->id_expediente;
        $modulodos->monto_demandado = $request->monto_demandado;
        $modulodos->fecha_emision= $request->fecha_emision;
        $modulodos->tipo_acuerdo = $request->tipo_acuerdo;
        $modulodos->subsana_prevencion= $request->subsana_prevencion;
        $modulodos->contestacion_demanda= $request->contestacion_demanda;
        $modulodos->fecha_no_contesta= $request->fecha_no_contesta;
        $modulodos->si_contesta= $request->si_contesta;
        $modulodos->fecha_si_contesta= $request->fecha_si_contesta;
        $modulodos->reconviene_demanda= $request->reconviene_demanda;
        $modulodos->fecha_reconviene= $request->fecha_reconviene;
        $modulodos->contesta_reconvenido= $request->contesta_reconvenido;
        $modulodos->numero_acuerdos= $request->numero_acuerdos;
        $modulodos->save();
        return $modulodos;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modulodos = modulo2::find($id);
        $modulodos->delete();
    }

}
