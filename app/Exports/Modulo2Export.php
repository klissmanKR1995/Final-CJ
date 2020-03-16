<?php

namespace App\Exports;

use App\AppModulo2;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class Modulo2Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('modulo2')
                        ->join('expedientes', 'ejemplos.id_expediente', '=', 'expedientes.id_expediente')
                        ->select('expedientes.numero_expediente','modulo2.monto_demandado', 'modulo2.fecha_emision', 'modulo2.tipo_acuerdo', 'modulo2.subsana_prevencion')
                       ->get();    
                   }
}
