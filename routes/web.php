<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HotelesController;
use App\Http\Controllers\RestaurantesController;
use App\Http\Controllers\SitiosController;
use App\Http\Controllers\QuestionController;
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
    return view('login.login');
});

// Ruta Login
Route::get('/login', [LoginController::class, 'login'])->name('login.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('autenticacion');


//Ruta registro
Route::get('/register', [RegisterController::class, 'show_register'])->name('login.register');
Route::post('/register', [RegisterController::class, 'register'])->name('register_post');

//Ruta Inicio
Route::get('/welcome', [WelcomeController::class, 'welcome'])->name('welcome');


//Ruta Hoteles
Route::get('/hoteles', [HotelesController::class, 'hoteles'])->name('hoteles');

//Ruta restaurantes
Route::get('/restaurantes', [RestaurantesController::class, 'restaurantes'])->name('restaurantes');

//Ruta sitios
Route::get('/sitios', [SitiosController::class, 'sitios'])->name('sitios');

//Rutas preguntas
Route::get('/question1', [QuestionController::class, 'question1'])->name('question1');
Route::post('/question1', [QuestionController::class, 'guardarComida'])->name('guardar_comida');

Route::get('/question2', [QuestionController::class, 'question2'])->name('question2');
Route::post('/question2', [QuestionController::class, 'guardarHotel'])->name('guardar_hotel');

Route::get('/question3', [QuestionController::class, 'question3'])->name('question3');
Route::post('/question3', [QuestionController::class, 'guardarSitio'])->name('guardar_sitio');

//Route::get('/recomendation', [QuestionController::class, 'mostrar_recomendation'])->name('mostrar_recomendacion_2');
Route::get('/recomendation', [QuestionController::class, 'recomendation'])->name('recomendation');
