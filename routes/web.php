<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('principal');
});

Route::view('/','paginas.inicio');
Route::view('/datos-personales','paginas.datos-personales');
Route::view('/documentos','paginas.documentos');
Route::view('/usuarios','paginas.usuarios');


Route::view('/malla-curricular','paginas.malla-curricular');
Route::view('/avance-carrera','paginas.avance-carrera');
Route::view('/record-academico','paginas.record-academico');
Route::view('/cursos-actuales','paginas.cursos-actuales');
Route::view('/historial-cursos','paginas.historial-cursos');
Route::view('/horario','paginas.horario');
Route::view('/ficha-matricula','paginas.ficha-matricula');
Route::view('/pagos-pendientes','paginas.pagos-pendientes');
Route::view('/historial-pagos','paginas.historial-pagos');
Route::view('/tramites','paginas.tramites');
Route::view('/reglamentos','paginas.reglamentos');
// Route::get('/', 'UsuarioController@getUsuarios');
// Route::get('/', [App\Http\Controllers\UsuarioController::class, 'getUsuarios']);
Route::resource('/', UsuarioController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
