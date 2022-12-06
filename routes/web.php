<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuizController;

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

Route::get('/', [QuizController::class, 'welcome']);
Route::get('/tema-facil', [QuizController::class, 'tema_facil'])->middleware('auth');
Route::get('/entrar-cadastrar', [QuizController::class, 'entrar_cadastrar']);

Route::post('/perguntaFacil', [QuizController::class, 'perguntaFacil']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
