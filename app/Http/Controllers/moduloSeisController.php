<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\modulo6;

class moduloSeisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {
        if($request->ajax()){
            return (DB::table('modulo6')
            ->join('expedientes', 'modulo6.id_expediente', '=', 'expedientes.id_expediente')
            ->select('modulo6.*', 'expedientes.numero_expediente')
            ->orderBy('numero_expediente', 'asc')
            ->paginate(5));
        }else{
            return view('home', compact('modulo6'));
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
        $moduloseis = new modulo6();
        $moduloseis->id_expediente = $request->id_expediente;
        $moduloseis->alegatos_presentados = $request->alegatos_presentados;
        $moduloseis->alegatos_presentados_parte_demandada= $request->alegatos_presentados_parte_demandada;
        $moduloseis->incidentes_pendientes = $request->incidentes_pendientes;
        $moduloseis->numero_incidentes_por_resolver = $request->numero_incidentes_por_resolver;
        $moduloseis->numero_incidentes_resueltos= $request->numero_incidentes_resueltos;
        $moduloseis->numero_total_acuerdos_por_resolver= $request->numero_total_acuerdos_por_resolver;
        $moduloseis->user_id = auth()->id();
        $moduloseis->save();

        return $moduloseis;
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
        $moduloseis = modulo6::find($id);
        $moduloseis->id_expediente = $request->id_expediente;
        $moduloseis->alegatos_presentados = $request->alegatos_presentados;
        $moduloseis->alegatos_presentados_parte_demandada= $request->alegatos_presentados_parte_demandada;
        $moduloseis->incidentes_pendientes = $request->incidentes_pendientes;
        $moduloseis->numero_incidentes_por_resolver = $request->numero_incidentes_por_resolver;
        $moduloseis->numero_incidentes_resueltos= $request->numero_incidentes_resueltos;
        $moduloseis->numero_total_acuerdos_por_resolver= $request->numero_total_acuerdos_por_resolver;
        $moduloseis->save();
        return $moduloseis;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $moduloseis = modulo6::find($id);
        $moduloseis->delete();
    }
}
