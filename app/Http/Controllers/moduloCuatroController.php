<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\modulo4;

class moduloCuatroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index(Request $request)
    {
        if($request->ajax()){
            return (DB::table('modulo4')
            ->join('expedientes', 'modulo4.id_expediente', '=', 'expedientes.id_expediente')
            ->select('modulo4.*', 'expedientes.numero_expediente')
            ->orderBy('numero_expediente', 'asc')
            ->paginate(5));
        }else{
            return view('home', compact('modulo4'));
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
        $modulocuatro = new modulo4();
        $modulocuatro->id_expediente= $request->id_expediente;
        $modulocuatro->se_ofrecen_pruebas = $request->se_ofrecen_pruebas;
        $modulocuatro->parte_que_ofrece_prueba = $request->parte_que_ofrece_prueba;
        $modulocuatro->fecha_ofrecen_pruebas= $request->fecha_ofrecen_pruebas;
        $modulocuatro->fecha_admision_pruebas = $request->fecha_admision_pruebas;
        $modulocuatro->pruebas_ofrecidas_en= $request->pruebas_ofrecidas_en;
        $modulocuatro->tipo_pruebas_ofrecidas= $request->tipo_pruebas_ofrecidas;
        $modulocuatro->tipo_pruebas_admitidas= $request->tipo_pruebas_admitidas;
        $modulocuatro->tipo_pruebas_desahogadas= $request->tipo_pruebas_desahogadas;
        $modulocuatro->fecha_desahogo_pruebas= $request->fecha_desahogo_pruebas;
        $modulocuatro->numero_pruebas_desahogadas= $request->numero_pruebas_desahogadas;
        $modulocuatro->fecha_aceptacion_cargo= $request->fecha_aceptacion_cargo;
        $modulocuatro->fecha_perritos_rinden= $request->fecha_perritos_rinden;
        $modulocuatro->juez_designa_perito= $request->juez_designa_perito;
        $modulocuatro->se_renuncia_pruenas= $request->se_renuncia_pruenas;
        $modulocuatro->parte_renuncia_pruebas= $request->parte_renuncia_pruebas;
        $modulocuatro->tipo_pruebas_renuncia= $request->tipo_pruebas_renuncia;
        $modulocuatro->motivos_renuncia_pruebas= $request->motivos_renuncia_pruebas;
        $modulocuatro->user_id = auth()->id();
        $modulocuatro->save();

        return $modulocuatro;
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
        $modulocuatro = modulo4::find($id);
        $modulocuatro->id_expediente= $request->id_expediente;
        $modulocuatro->se_ofrecen_pruebas = $request->se_ofrecen_pruebas;
        $modulocuatro->parte_que_ofrece_prueba = $request->parte_que_ofrece_prueba;
        $modulocuatro->fecha_ofrecen_pruebas= $request->fecha_ofrecen_pruebas;
        $modulocuatro->fecha_admision_pruebas = $request->fecha_admision_pruebas;
        $modulocuatro->pruebas_ofrecidas_en= $request->pruebas_ofrecidas_en;
        $modulocuatro->tipo_pruebas_ofrecidas= $request->tipo_pruebas_ofrecidas;
        $modulocuatro->tipo_pruebas_admitidas= $request->tipo_pruebas_admitidas;
        $modulocuatro->tipo_pruebas_desahogadas= $request->tipo_pruebas_desahogadas;
        $modulocuatro->fecha_desahogo_pruebas= $request->fecha_desahogo_pruebas;
        $modulocuatro->numero_pruebas_desahogadas= $request->numero_pruebas_desahogadas;
        $modulocuatro->fecha_aceptacion_cargo= $request->fecha_aceptacion_cargo;
        $modulocuatro->fecha_perritos_rinden= $request->fecha_perritos_rinden;
        $modulocuatro->juez_designa_perito= $request->juez_designa_perito;
        $modulocuatro->se_renuncia_pruenas= $request->se_renuncia_pruenas;
        $modulocuatro->parte_renuncia_pruebas= $request->parte_renuncia_pruebas;
        $modulocuatro->tipo_pruebas_renuncia= $request->tipo_pruebas_renuncia;
        $modulocuatro->motivos_renuncia_pruebas= $request->motivos_renuncia_pruebas;
        $modulocuatro->save();
        return $modulocuatro;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modulocuatro = modulo4::find($id);
        $modulocuatro->delete();
    }
}
