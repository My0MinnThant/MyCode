<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MathController;

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

Route::get('test', [TestController::class, 'index']);
Route::get('add',[AddController::class, 'index']);
Route::get('student',[TestController::class, 'add'])->name('student');
Route::post('add-student',[TestController::class, 'create'])->name('add-student');
Route::get('/test/delete/{id}', [TestController::class, 'delete'])->name('delete');
Route::get('/view/student/{id}', [TestController::class, 'view'])->name('view-student');
Route::get('/edit/student/{id}', [TestController::class, 'edit'])->name('edit-student');
Route::put('/update/student/{id}', [TestController::class, 'update'])->name('update-student');
Route::post('add-category', [CategoryController::class, 'add'])->name('category');


Route::get('category', [CategoryController::class, 'index']);

Route::get('/json', function(){

    $student = DB::table('articles')->get();

    return response($student);
});


Route::get('/math', [MathController::class,'index']);
Route::post('/addstudent', [MathController::class, 'store'])->name('add-student');

