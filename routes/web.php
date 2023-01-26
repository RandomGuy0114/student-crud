<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('index');
// })->name('index');
Route::get('/', [StudentController::class, 'display'])->name('index');

Route::post('/newstudent', [StudentController::class, 'create'])->name('newstudent'); //kinomment out ko yung isang  'Route::post('/newtodo', function (Request $request)' kasi nga meron nang Controller na ginawa.

Route::get('/deletestudent/{id}', [StudentController::class, 'delete'])->name('deletestudent'); //kinomment out ko yung isang  'Route::post('/newtodo', function (Request $request)' kasi nga meron nang Controller na ginawa.

Route::get('/editstudent/{id}', [StudentController::class, 'edit'])->name('editstudent');

Route::post('/updatestudent', [StudentController::class, 'update'])->name('updatestudent'); //kinomment out ko yung isang  'Route::post('/newtodo', function (Request $request)' kasi nga meron nang Controller na ginawa.

