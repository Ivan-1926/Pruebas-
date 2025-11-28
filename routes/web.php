<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursosController;

Route::get('/', HomeController::class);

Route::controller(CursosController::class)->group(function(){
Route::get('cursos', 'index');
Route::get('cursos/create', 'create');
Route::get('cursos/{curso}', 'show');
});

Route::get('/', function () {
    return ('Bienvenido a la página principal');
});

Route::get('cursos', function () {
    return 'Bienvenido a la página de los cursos';
});

// //Ruta para formulario de nuevo registro
// Route::get('users/create', function () {
//     return "En esta pagina podras crear un nuevo curso.";
// });

// //es necesario que este tipo de ruta trabaje con variables
// Route::get('cursos/{cursos}', function ($curso) {
//     return "Bienvenido al curso: $curso";
// });



//Ruta para formulario de nuevo registro
Route::get('cursos/create', function () {
    return "En esta pagina podras crear un nuevo curso.";
});

//es necesario que este tipo de ruta trabaje con variables
Route::get('cursos/{cursos}', function ($curso) {
    return "Bienvenido al curso: $curso";
});

//Ruta con 2 parámetros
Route::get('cursos/{cursos}/{categoria}', function ($curso,$categoria=null) {
    if($categoria){
        return "Bienvenido al curso: $curso, de la categoía:$categoria";
    }else{
        return "Bienvenido al curso:$curso";
    }
});
