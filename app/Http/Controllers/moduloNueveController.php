<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\modulo9;



class moduloNueveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index(Request $request)
        {
            if($request->ajax()){
                return (DB::table('modulo9s')
                ->join('expedientes', 'modulo9s.id_expediente', '=', 'expedientes.id_expediente')
                ->select('modulo9s.*', 'expedientes.numero_expediente')
                ->orderBy('numero_expediente', 'asc')
                ->paginate(5));
            }else{
                return view('home', compact('modulo9s'));
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
        $modulonueve = new modulo9();
        $modulonueve->id_expediente = $request->id_expediente;
        $modulonueve->suerte_principal_liquidada_en_la_sentencia = $request->suerte_principal_liquidada_en_la_sentencia;
        $modulonueve->intereses_ordinarios_liquidados_en_la_sentencia = $request->intereses_ordinarios_liquidados_en_la_sentencia;
        $modulonueve->intereses_moratorios_liquidados_en_la_sentencia= $request->intereses_moratorios_liquidados_en_la_sentencia;
        $modulonueve->pena_convencional_liquidada_en_la_sentencia = $request->pena_convencional_liquidada_en_la_sentencia;
        $modulonueve->daños_liquidados_en_la_sentencia = $request->daños_liquidados_en_la_sentencia;
        $modulonueve->perjuicios_liquidados_en_la_sentencia = $request->perjuicios_liquidados_en_la_sentencia;
        $modulonueve->gastos_liquidados_en_la_sentencia = $request->gastos_liquidados_en_la_sentencia;
        $modulonueve->costas_liquidadas_en_la_sentencia = $request->costas_liquidadas_en_la_sentencia;
        $modulonueve->honorarios_liquidados_en_la_sentencia = $request->honorarios_liquidados_en_la_sentencia;
        $modulonueve->otros_liquidados_en_la_sentencia = $request->otros_liquidados_en_la_sentencia;
        $modulonueve->suerte_principal_liquidada_en_la_ejecución_de_la_sentencia = $request->suerte_principal_liquidada_en_la_ejecución_de_la_sentencia;
        $modulonueve->intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia= $request->intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia;
        $modulonueve->intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia = $request->intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia;
        $modulonueve->pena_convencional_liquidada_en_la_ejecución_de_la_sentencia = $request->pena_convencional_liquidada_en_la_ejecución_de_la_sentencia;
        $modulonueve->daños_liquidados_en_la_ejecución_de_la_sentencia   = $request->daños_liquidados_en_la_ejecución_de_la_sentencia    ;
        $modulonueve->perjuicios_liquidados_en_la_ejecución_de_la_sentencia = $request->perjuicios_liquidados_en_la_ejecución_de_la_sentencia;
        $modulonueve->gastos_liquidados_en_la_ejecución_de_la_sentencia = $request->gastos_liquidados_en_la_ejecución_de_la_sentencia;
        $modulonueve->costas_liquidadas_en_la_ejecución_de_la_sentencia = $request->costas_liquidadas_en_la_ejecución_de_la_sentencia;
        $modulonueve->honorarios_liquidados_en_la_ejecución_de_la_sentencia = $request->honorarios_liquidados_en_la_ejecución_de_la_sentencia;
        $modulonueve->otros_liquidados_en_la_ejecución_de_la_sentencia = $request->otros_liquidados_en_la_ejecución_de_la_sentencia;
        $modulonueve->user_id = auth()->id();
        $modulonueve->save();

        return $modulonueve;
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
            $modulonueve = modulo9::find($id);
            $modulonueve->id_expediente = $request->id_expediente;
            $modulonueve->suerte_principal_liquidada_en_la_sentencia = $request->suerte_principal_liquidada_en_la_sentencia;
            $modulonueve->intereses_ordinarios_liquidados_en_la_sentencia = $request->intereses_ordinarios_liquidados_en_la_sentencia;
            $modulonueve->intereses_moratorios_liquidados_en_la_sentencia = $request->intereses_moratorios_liquidados_en_la_sentencia;
            $modulonueve->pena_convencional_liquidada_en_la_sentencia = $request->pena_convencional_liquidada_en_la_sentencia;
            $modulonueve->daños_liquidados_en_la_sentencia = $request->daños_liquidados_en_la_sentencia;
            $modulonueve->perjuicios_liquidados_en_la_sentencia = $request->perjuicios_liquidados_en_la_sentencia;
            $modulonueve->gastos_liquidados_en_la_sentencia = $request->gastos_liquidados_en_la_sentencia;
            $modulonueve->costas_liquidadas_en_la_sentencia = $request->costas_liquidadas_en_la_sentencia;
            $modulonueve->honorarios_liquidados_en_la_sentencia = $request->honorarios_liquidados_en_la_sentencia;
            $modulonueve->otros_liquidados_en_la_sentencia = $request->otros_liquidados_en_la_sentencia;
            $modulonueve->suerte_principal_liquidada_en_la_ejecución_de_la_sentencia = $request->suerte_principal_liquidada_en_la_ejecución_de_la_sentencia;
            $modulonueve->intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia = $request->intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia;
            $modulonueve->intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia = $request->intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia;
            $modulonueve->pena_convencional_liquidada_en_la_ejecución_de_la_sentencia = $request->pena_convencional_liquidada_en_la_ejecución_de_la_sentencia;
            $modulonueve->daños_liquidados_en_la_ejecución_de_la_sentencia   = $request->daños_liquidados_en_la_ejecución_de_la_sentencia    ;
            $modulonueve->perjuicios_liquidados_en_la_ejecución_de_la_sentencia = $request->perjuicios_liquidados_en_la_ejecución_de_la_sentencia;
            $modulonueve->gastos_liquidados_en_la_ejecución_de_la_sentencia = $request->gastos_liquidados_en_la_ejecución_de_la_sentencia;
            $modulonueve->costas_liquidadas_en_la_ejecución_de_la_sentencia = $request->costas_liquidadas_en_la_ejecución_de_la_sentencia;
            $modulonueve->honorarios_liquidados_en_la_ejecución_de_la_sentencia = $request->honorarios_liquidados_en_la_ejecución_de_la_sentencia;
            $modulonueve->otros_liquidados_en_la_ejecución_de_la_sentencia = $request->otros_liquidados_en_la_ejecución_de_la_sentencia;
            $modulonueve->save();
            return $modulonueve;
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        $modulonueve = modulo9::find($id);
        $modulonueve->delete();
    }
}
