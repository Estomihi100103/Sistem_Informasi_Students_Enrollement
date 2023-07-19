<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\user_sController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\getCourseController;
use App\Http\Controllers\StudentCourseController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//mengarah ke index home
Route::get('/', function () {
    return view('index', [
        "title" => "Home",

    ]);
})->middleware('auth');

//ke students yang ada di dashboard
Route::resource('students', StudentsController::class); 
Route::resource('user_s', user_sController::class)->middleware('auth');




//ke courses yang ada di dashboard
Route::resource('courses', CourseController::class);//authorize('admin') di tangani menggunakan gate




//ke login  yang mengarah ke controller login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');   //untuk menampilkan halaman login nya
Route::post('/login', [LoginController::class, 'authenticate']);  //untuk proses login nya

//ke logout  yang mengarah ke controller login
Route::post('/logout', [LoginController::class, 'logout']);

//ke register  yang mengarah ke controller register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


//getCourseController
Route::get('/getCourses', [getCourseController::class, 'index']); //untuk menampilkan halaman getCourses nya
Route::post('/getCourses', [getCourseController::class, 'store']); //untuk proses getCourses nya


