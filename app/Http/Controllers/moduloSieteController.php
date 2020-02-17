<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\modulo7;

class moduloSieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return (DB::table('modulo7')
            ->join('expedientes', 'modulo7.id_expediente', '=', 'expedientes.id_expediente')
            ->select('modulo7.*', 'expedientes.numero_expediente')
            ->orderBy('numero_expediente', 'asc')
            ->paginate(5));
        }else{
            return view('home', compact('modulo7'));
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
        $modulosiete = new modulo6();
        $modulosiete->id_expediente = $request->id_expediente;
        $modulosiete->tipo_termminacion = $request->tipo_termminacion;
        $modulosiete->caso_terminacion= $request->caso_terminacion;
        $modulosiete->fase_terminacion = $request->fase_terminacion;
        $modulosiete->fecha_terminacion = $request->fecha_terminacion;
        $modulosiete->fecha_emision_sentencia= $request->fecha_emision_sentencia;
        $modulosiete->sentencia_favor= $request->sentencia_favor;
        $modulosiete->monto_liquido= $request->monto_liquido;
        $modulosiete->user_id = auth()->id();
        $modulosiete->save();

        return $modulosiete;
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
        $modulosiete = modulo7::find($id);
        $modulosiete->id_expediente = $request->id_expediente;
        $modulosiete->tipo_termminacion = $request->tipo_termminacion;
        $modulosiete->caso_terminacion= $request->caso_terminacion;
        $modulosiete->fase_terminacion = $request->fase_terminacion;
        $modulosiete->fecha_terminacion = $request->fecha_terminacion;
        $modulosiete->fecha_emision_sentencia= $request->fecha_emision_sentencia;
        $modulosiete->sentencia_favor= $request->sentencia_favor;
        $modulosiete->monto_liquido= $request->monto_liquido;
        $modulosiete->save();
        return $modulosiete;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modulosiete = modulo7::find($id);
        $modulosiete->delete();
    }
}
