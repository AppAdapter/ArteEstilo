<?php

use App\Http\Controllers\CajaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ResumenController;

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

/*
Route::get('/empleado', function () {
    return view('empleado.index');
});

Route::get('/empleado/create',[EmpleadoController::class,'create']);
*/


Auth::routes(/*"para eliminar registro y olvido la contraseña de login"*/['register'=>false, 'reset'=> false]);

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware'=>['vrol', 'auth']],function () { 
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
    Route::resource('empleado',EmpleadoController::class)->middleware('auth');
    Route::get('/resumen',[ResumenController::class, 'index'])->name('resumen')->middleware('auth');

   
});



Route::get('/caja', [CajaController::class, 'index'])->name('inicio')->middleware('auth');

Route::post('/operacion', [CajaController::class, 'operacion'])->name('operacion')->middleware('auth');

Route::resource('Resumen', ResumenController::class)->middleware('auth');

