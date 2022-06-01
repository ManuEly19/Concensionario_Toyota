<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


// PASO 1
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO GET
Route::get('/', function () {
    return View('welcome');
});

// ROUTE PARA PRESENTAR UN TEXTO UTILIZANDO EL MÉTODO GET
Route::get('demo1', function () {
    return 'Hola Laravel';
});

// ROUTE PARA PRESENTAR UN JSON UTILIZANDO EL MÉTODO GET
Route::get('demo2', function () {
    return '{
    "Nombre":"Manu",
    "Apellido":"Auqui",
    "Ciudad":"Quito"
    }';
});

/*
// PASO 2
// PROBLEMA DE LAS RUTAS SIN EL MÉTODO NAME
Route::get('servicio', function () {
    return '
        <a href="Servicie">servicios</a>
        <br>
        <a href="service">servicios</a>
        <br>
        <a href="service">servicios</a>
        <br>
        <a href="service">servicios</a>
    ';
});
*/

/*
// PASO 3
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::get('/', function () {
    return View('home');
})->name('home');
*/



/* // PASO 4
// ROUTE PARA MANDAR DATOS A LA VISTA
Route::get('modelos', function () {
    // ES VÁLIDO PERO SE DEBE RECORDAR QUE PARA TRAER DATOS O PROCESAR
    // PETICIONES DE LA BDD SE UTILIZA UN CONTROLADOR
    $autos =
        [
            "CHEVROLET" => 'TRACKER',
            "MAZDA" => '323',
            "FORD" => 'RANGER',
            "KIA" => 'SPORTAGE',
            "GREAT WALL" => 'WINGLE'
        ];
    $nombre = "Manu";
    return view('modelos', compact('autos', 'nombre'));
})->name('models');
 */



// PASO 5 - DEFINIR UNA RUTA
Route::get('home', function () {
    return View('home');
})->name('home');
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::view('nosotros', 'nosotros')->name('about');
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::get('personal', [PersonalController::class, 'personal'])->name('personal');

Route::get('modelos', ModeloController::class)->name('models'); //Para ejecutar el controlador al usar una ruta
//                                             El nonbre de la ruta

// PASAR PARAMETROS A LA ROUTE
Route::get('contactos/{name?}', [ContactoController::class, 'dataContact'])->name('contact');
//                               Llama al controlador       Llama a la funcion de controlador

Route::resource('autos', AutoController::class)->except('index','show');



/*
// PASO 6
// REDIRECCIONAR RUTAS UTILIANDO EL MÉTODO ROUTE
Route::view('novedades','novedades')->name('novedades');
Route::get('productos/',function(){
    return redirect()->route('novedades'); // SIEMPRE PARA RUTAS DE TIPO VIEW
})->name('productos');
*/

// ROUTE DE TIPO
// GET
// POST
// PUT
// PATCH
// DELETE
