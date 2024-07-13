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

// // Station 01
// Route::get('practice', function() {
//     return response('practice');
// });

// Route::get('practice2', function() {
//     $test = 'practice2';
// return response($test);
// });

// Route::get('practice3', function() {
//     $test = 'test';
// return response($test);
// });


// Station 02
use App\Http\Controllers\PracticeController;

// Route::get('URL', [Controllerの名前::class, 'Controller内のfunction名']);
Route::get('/practice', [PracticeController::class, 'sample']);
Route::get('/practice2', [PracticeController::class, 'sample2']);
Route::get('/practice3', [PracticeController::class, 'sample3']);

// Station 04
Route::get('/getPractice', [PracticeController::class, 'getPractice']);



// Station06
use App\Http\Controllers\MovieController;

Route::get('/movieTest', [MovieController::class, 'movieTest']);

Route::get('/movies', [MovieController::class, 'getMovies']);
