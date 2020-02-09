<?php

namespace App\Exports;

use App\EjemploTres;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class EjemploTresExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('ejemplo_tres')
                    ->join('expedientes', 'ejemplo_tres.id_expediente', '=', 'expedientes.id_expediente')
                    ->select('expedientes.numero_expediente', 'ejemplo_tres.fecha_juez_emplazamiento', 'ejemplo_tres.mecanismos_realizar_emplazamiento', 'ejemplo_tres.pais_emplazamiento', 'ejemplo_tres.estado_emplazamiento', 'ejemplo_tres.municipio_emplazamiento', 'ejemplo_tres.codigo_postal', 'ejemplo_tres.numero_visitas', 'ejemplo_tres.se_realizo', 'ejemplo_tres.mecanismos_realizacion_emplazamiento', 'ejemplo_tres.si_fecha', 'ejemplo_tres.no_motivos')
                    ->get();


    }
}
