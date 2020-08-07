<?php

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


Route::get("/hola", function(){
    return "Hola Mundo desde Laravel";
});

Route::get("/backend", function(){
    return ["PHP", "JAVA", "PYTHON", "JAVASCRIPT", "GO"];
});

Route::get("/framework", function(){
    return ["nombre" => "Laravel", "lenguaje" => "PHP", "plantilla" => "Blade"];
});

Route::get("/frameworks", function(){
    $t1 = ["nombre" => "Laravel", "lenguaje" => "PHP", "plantilla" => "Blade"];
    $t2 = ["nombre" => "Spring boot", "lenguaje" => "JAVA", "plantilla" => "Ty----"];
    $t3 = ["nombre" => "Symfony", "lenguaje" => "PHP", "plantilla" => "Twig"];
    $t4 = ["nombre" => "Express", "lenguaje" => "JavaScript (Node.js)", "plantilla" => ["Pug", "ejs", "Jade", "HBS"]];
    return [$t1, $t2, $t3, $t4];
});

Route::get("/nombre/{nombre}", function($nom){
    return ["nombre" => $nom];
});

Route::get("/actividad", function(){
    return view("actividades");
});

Route::get("/carrito", function(){
    return view("carrito");
});