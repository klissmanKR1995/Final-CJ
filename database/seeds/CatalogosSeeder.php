<?php
use App\Catalogos;
use Illuminate\Database\Seeder;

class CatalogosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Datos de las partes ';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Tipo de persona';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Sexo';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Pais';
        $catalogos->estatus = 'Activo';
        $catalogos->save();


        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Estado';
        $catalogos->estatus = 'Activo';
        $catalogos->save();
    
        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Municipio';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Nacionalidad';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Tipo de domicilio';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Tipo de discapacidad';
        $catalogos->estatus = 'Activo';
        $catalogos->save();


        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Escolaridad';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Lengua Indigena';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Ocupación';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Condición de actividad';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Fuente de ingresos';
        $catalogos->estatus = 'Activo';
        $catalogos->save();


        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Tipo de representación';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

                $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Tipos de derechos';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Tipo de medida';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Tipo de amparo';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Fase procesal';
        $catalogos->estatus = 'Activo';
        $catalogos->save();


        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Tipo de resolución de amparo';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

                $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Mecanismo para realizar emplazamiento';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Codigo postal';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Mecanismos de realización de emplazamiento';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Si contesta demanda';
        $catalogos->estatus = 'Activo';
        $catalogos->save();


        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Tipo prueba 1';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

                $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Tipo de prueba 2';
        $catalogos->estatus = 'Activo';
        $catalogos->save();

        $catalogos = new catalogos();
        $catalogos->nombre_variable = 'Tipo de prueba 3';
        $catalogos->estatus = 'Activo';
        $catalogos->save();
    }
}
