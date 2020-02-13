<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\modulo5;

class moduloCincoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index(Request $request)
    {
        if($request->ajax()){
            return (DB::table('modulo5')
            ->join('expedientes', 'modulo5.id_expediente', '=', 'expedientes.id_expediente')
            ->select('modulo5.*', 'expedientes.numero_expediente')
            ->orderBy('numero_expediente', 'asc')
            ->paginate(5));
        }else{
            return view('home', compact('modulo5'));
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
        $modulocinco = new modulo5();
        $modulocinco->id_expediente = $request->id_expediente;
        $modulocinco->emision_acuerdo_controvertido = $request->emision_acuerdo_controvertido;
        $modulocinco->fecha_emision_acuerdo= $request->fecha_emision_acuerdo;
        $modulocinco->fecha_emision_acuerdo_probatorio = $request->fecha_emision_acuerdo_probatorio;
        $modulocinco->emision_acuerdo = $request->emision_acuerdo;
        $modulocinco->numero_total_acuerdos= $request->numero_total_acuerdos;
        $modulocinco->user_id = auth()->id();
        $modulocinco->save();

        return $modulocinco;
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

        $modulocinco = modulo5::find($id);
        $modulocinco->id_expediente = $request->id_expediente;
        $modulocinco->emision_acuerdo_controvertido = $request->emision_acuerdo_controvertido;
        $modulocinco->fecha_emision_acuerdo= $request->fecha_emision_acuerdo;
        $modulocinco->fecha_emision_acuerdo_probatorio = $request->fecha_emision_acuerdo_probatorio;
        $modulocinco->emision_acuerdo = $request->emision_acuerdo;  
        $modulocinco->numero_total_acuerdos= $request->numero_total_acuerdos;
        $modulocinco->save();
        return $modulocinco;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modulocinco = modulo5::find($id);
        $modulocinco->delete();
    }
}
