<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\NotizieController;
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

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/chisiamo', [FrontController::class, 'chisiamo'])->name('chisiamo');
Route::get('/gdpr', [FrontController::class, 'gdpr'])->name('gdpr');
Route::get('/creanotizia', [NotizieController::class, 'crea'])->name('crea');
Route::post('/creanotizia', [NotizieController::class, 'salva'])->name('creanotizia');
Route::get('/notizie', [NotizieController::class, 'lista'])->name('notizie');
Route::get('/sitemap.xml', [FrontController::class, 'sitemap'])->name('sitemap');
Route::post('/invia', [FrontController::class, 'inviamessaggio'])->name('inviaMessaggio');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*-------------------------------LAZZERINI--------------------------------------*/
Route::get('/informative/lazzerini', function ()
{ return response()->file('informative/lazzerini.pdf'); });

/*-------------------------------CRESTI--------------------------------------*/
Route::get('/informative/cresti', function ()
{ return response()->file('informative/cresti.pdf'); });
