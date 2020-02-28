<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\modulo3;

class moduloTresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return (DB::table('modulo3')
            ->join('expedientes', 'modulo3.id_expediente', '=', 'expedientes.id_expediente')
            ->select('modulo3.*', 'expedientes.numero_expediente')
            ->orderBy('numero_expediente', 'asc')
            ->paginate(5));
        }else{
            return view('home', compact('modulo3'));
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
        $modulotres = new modulo3();
        $modulotres->id_expediente = $request->id_expediente;
        $modulotres->tipo_audiencia = $request->tipo_audiencia;
        $modulotres->fecha_audiencia= $request->fecha_audiencia;
        $modulotres->fecha_inicio_audiencia = $request->fecha_inicio_audiencia;
        $modulotres->fecha_conclusion= $request->fecha_conclusion;
        $modulotres->se_difiere= $request->se_difiere;
        $modulotres->tipo_audicencia_diferida= $request->tipo_audicencia_diferida;
        $modulotres->causas_diferimientos= $request->causas_diferimientos;
        $modulotres->fecha_difiere_audiencia= $request->fecha_difiere_audiencia;
        $modulotres->fecha_continuidad= $request->fecha_continuidad;
        $modulotres->fecha_conclusion_diferida= $request->fecha_conclusion_diferida;
        $modulotres->user_id = auth()->id();
        $modulotres->save();

        return $modulotres;
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
        $modulotres = modulo3::find($id);
        $modulotres->id_expediente = $request->id_expediente;
        $modulotres->tipo_audiencia = $request->tipo_audiencia;
        $modulotres->fecha_audiencia= $request->fecha_audiencia;
        $modulotres->fecha_inicio_audiencia = $request->fecha_inicio_audiencia;
        $modulotres->fecha_conclusion= $request->fecha_conclusion;
        $modulotres->se_difiere= $request->se_difiere;
        $modulotres->tipo_audicencia_diferida= $request->tipo_audicencia_diferida;
        $modulotres->causas_diferimientos= $request->causas_diferimientos;
        $modulotres->fecha_difiere_audiencia= $request->fecha_difiere_audiencia;
        $modulotres->fecha_continuidad= $request->fecha_continuidad;
        $modulotres->fecha_conclusion_diferida= $request->fecha_conclusion_diferida;
        $modulotres->save();
        return $modulotres;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modulotres = modulo3::find($id);
        $modulotres->delete();
    }
}
