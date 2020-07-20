<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('register', 'Auth\RegisterController@index')->name('register');


/* Rutas de tipos usuarios */

Route::get('/home', 'HomeController@index');

Route::get('/oficial', 'OficialController@index');

Route::get('/contralor', 'ContralorController@index');

Route::get('/diligenciario', 'DiligenciarioController@index');

Route::get('/secretario', 'SecretarioController@index');

Route::get('/ingeniero', 'IngenieroController@index');

Route::get('/juez', 'JuezController@index');

Route::get('/graficas', 'graController@index');

/* Rutas de los componentes en interfaz home (Administrador) */

Route::resource('/distritos','distritosController');


Route::get('distritosAll', 'distritosController@distritosAll')->name('distritosAll');

Route::get('/searchNombreDistrito', 'distritosController@searchNombreDistrito')->name('searchNombreDistrito');

Route::resource('/juzgados', 'juzgadosController');

Route::get('juzgadosAll', 'juzgadosController@juzgadosAll')->name('juzgadosAll');

Route::get('/searchNombreJuzgado', 'juzgadosController@searchNombreJuzgado')->name('searchNombreJuzgado');

Route::resource('/materias', 'materiasController');



Route::resource('/usuarios', 'usuariosController');


Route::get('materiasAll', 'materiasController@materiasAll')->name('materiasAll');

Route::get('/searchNombreMateria', 'materiasController@searchNombreMateria')->name('searchNombreMateria');

Route::resource('/juicios', 'juiciosController');

Route::get('juiciosAll', 'juiciosController@juiciosAll')->name('juiciosAll');

Route::get('/searchByID', 'juiciosController@searchByID')->name('searchByID');

Route::get('/searchNombreJuicio', 'juiciosController@searchNombreJuicio')->name('searchNombreJuicio');

Route::resource('/variables', 'catalogosController');

Route::get('catalogosAll', 'catalogosController@catalogosAll')->name('catalogosAll');

Route::get('/searchNombreVariable', 'catalogosController@searchNombreVariable')->name('searchNombreVariable');

Route::resource('/valorescatalogos', 'valores_catalogosController');

Route::get('/getCatalogos', 'valores_catalogosController@getCatalogos')->name('getCatalogos');

Route::get('/personaCatalogos', 'valores_catalogosController@personaCatalogos')->name('personaCatalogos');

Route::get('/sexoCatalogos', 'valores_catalogosController@sexoCatalogos')->name('sexoCatalogos');

Route::get('/paisesCatalogos', 'valores_catalogosController@paisesCatalogos')->name('paisesCatalogos');

Route::get('/estadosCatalogos', 'valores_catalogosController@estadosCatalogos')->name('estadosCatalogos');

Route::get('/municipiosCatalogos', 'valores_catalogosController@municipiosCatalogos')->name('municipiosCatalogos');

Route::get('/nacionalidadesCatalogos', 'valores_catalogosController@nacionalidadesCatalogos')->name('nacionalidadesCatalogos');

Route::get('/pais_habitualCatalogos', 'valores_catalogosController@pais_habitualCatalogos')->name('pais_habitualCatalogos');

Route::get('/estado_habitualCatalogos', 'valores_catalogosController@estado_habitualCatalogos')->name('estado_habitualCatalogos');

Route::get('/municipio_habitualCatalogos', 'valores_catalogosController@municipio_habitualCatalogos')->name('municipio_habitualCatalogos');

Route::get('/tipoDomicilioCatalogos', 'valores_catalogosController@tipoDomicilioCatalogos')->name('tipoDomicilioCatalogos');

Route::get('/discapacidadesCatalogos', 'valores_catalogosController@discapacidadesCatalogos')->name('discapacidadesCatalogos');

Route::get('/escolaridadCatalogos', 'valores_catalogosController@escolaridadCatalogos')->name('escolaridadCatalogos');

Route::get('/lenguaIndigenaCatalogos', 'valores_catalogosController@lenguaIndigenaCatalogos')->name('lenguaIndigenaCatalogos');

Route::get('/ocupacionCatalogos', 'valores_catalogosController@ocupacionCatalogos')->name('ocupacionCatalogos');

Route::get('/fuenteIngresosCatalogos', 'valores_catalogosController@fuenteIngresosCatalogos')->name('fuenteIngresosCatalogos');

Route::get('/condicionActividadCatalogos', 'valores_catalogosController@condicionActividadCatalogos')->name('condicionActividadCatalogos');

Route::get('/tipoRepresentacionCatalogos', 'valores_catalogosController@tipoRepresentacionCatalogos')->name('tipoRepresentacionCatalogos');

Route::get('/sexoRepresentacionCatalogos', 'valores_catalogosController@sexoRepresentacionCatalogos')->name('sexoRepresentacionCatalogos');

Route::get('/tipoDerechosCatalogos', 'valores_catalogosController@tipoDerechosCatalogos')->name('tipoDerechosCatalogos');

Route::get('/tipoMedidaCatalogos', 'valores_catalogosController@tipoMedidaCatalogos')->name('tipoMedidaCatalogos');

Route::get('/tipoAmparoCatalogos', 'valores_catalogosController@tipoAmparoCatalogos')->name('tipoAmparoCatalogos');

Route::get('/faseProcesalCatalogos', 'valores_catalogosController@faseProcesalCatalogos')->name('faseProcesalCatalogos');

Route::get('/resolucionAmparoCatalogos', 'valores_catalogosController@resolucionAmparoCatalogos')->name('resolucionAmparoCatalogos');

Route::get('/mecanismosRealizarCatalogos', 'valores_catalogosController@mecanismosRealizarCatalogos')->name('mecanismosRealizarCatalogos');

Route::get('/paisEmplazamientoCatalogos', 'valores_catalogosController@paisEmplazamientoCatalogos')->name('paisEmplazamientoCatalogos');

Route::get('/estadoEmplazamientoCatalogos', 'valores_catalogosController@estadoEmplazamientoCatalogos')->name('estadoEmplazamientoCatalogos');

Route::get('/municipioEmplazamientoCatalogos', 'valores_catalogosController@municipioEmplazamientoCatalogos')->name('municipioEmplazamientoCatalogos');

Route::get('/codigoPostalCatalogos', 'valores_catalogosController@codigoPostalCatalogos')->name('codigoPostalCatalogos');

Route::get('/mecanismosRealizacionCatalogos', 'valores_catalogosController@mecanismosRealizacionCatalogos')->name('mecanismosRealizacionCatalogos');

Route::get('/siContestaCatalogos', 'valores_catalogosController@siContestaCatalogos')->name('siContestaCatalogos');

Route::get('/pruebasCatalogos1', 'valores_catalogosController@pruebasCatalogos1')->name('pruebasCatalogos1');

Route::get('/pruebasCatalogos2', 'valores_catalogosController@pruebasCatalogos2')->name('pruebasCatalogos2');

Route::get('/pruebasCatalogos3', 'valores_catalogosController@pruebasCatalogos3')->name('pruebasCatalogos3');

Route::get('/pruebasCatalogos4', 'valores_catalogosController@pruebasCatalogos4')->name('pruebasCatalogos4');

Route::get('/searchNombreValores', 'valores_catalogosController@searchNombreValores')->name('searchNombreValores');


/* Rutas de los componentes en interfaz Oficial (Oficial de partes) */

Route::resource('/expedientes', 'expedientesController');

Route::get('expedientesAll', 'expedientesController@expedientesAll')->name('expedientesAll');
Route::get('prueba', 'expedientesController@prueba')->name('prueba');

Route::get('/searchNombreExpdiente', 'expedientesController@searchNombreExpdiente')->name('searchNombreExpdiente');


Route::resource('/modulouno', 'ejemploController');

Route::resource('/modulodos', 'ejemploDosController');

Route::resource('/modulo2', 'moduloDosController');

Route::resource('/modulotres', 'ejemploTresController');

Route::resource('/modulo3', 'moduloTresController');

Route::resource('/modulocuatro', 'moduloCuatroController');

Route::resource('/modulocinco', 'moduloCincoController');

Route::resource('/moduloseis', 'moduloSeisController');

Route::resource('/modulosiete', 'moduloSieteController');

Route::resource('/modulonueve', 'moduloNueveController');



/* Rutas del PDF */

Route::get('distritosPDF', 'distritosController@exportPdf')->name('distritos.pdf');

Route::get('distritosExcel', 'distritosController@exportExcel')->name('distritos.xlsx');

Route::get('juzgadosPDF', 'juzgadosController@exportPdf')->name('juzgados.pdf');

Route::get('juzgadosExcel', 'juzgadosController@exportExcel')->name('juzgados.xlsx');

Route::get('materiasPDF', 'materiasController@exportPdf')->name('materias.pdf');

Route::get('materiasExcel', 'materiasController@exportExcel')->name('materias.xlsx');

Route::get('juiciosPDF', 'juiciosController@exportPdf')->name('juicios.pdf');

Route::get('juiciosExcel', 'juiciosController@exportExcel')->name('juicios.xlsx');

Route::get('variablesPDF', 'catalogosController@exportPdf')->name('variables.pdf');

Route::get('variablesExcel', 'catalogosController@exportExcel')->name('variables.xlsx');

Route::get('valoresvariablesPDF', 'valores_catalogosController@exportPdf')->name('valoresvariables.pdf');

Route::get('valoresvariablesExcel', 'valores_catalogosController@exportExcel')->name('valoresvariables.xlsx');

Route::get('expedientesPDF', 'expedientesController@exportPdf')->name('expedientes.pdf');

Route::get('expedientesExcel', 'expedientesController@exportExcel')->name('expedientes.xlsx');

Route::get('modulodiezPDF', 'ejemplotresController@exportPdf')->name('modulodiez.pdf');

Route::get('modulounoExcel', 'ejemploController@exportExcel')->name('modulouno.xlsx');

Route::get('modulodiezExcel', 'ejemplotresController@exportExcel')->name('modulodiez.xlsx');

Route::get('modulo2Excel', 'modulosDosController@exportExcel')->name('modulo2.xlsx');

