<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use PSpell\Config;

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

Route::get('/', [LoginController::class, 'create']);
Route::post('/regsiter',[LoginController::class, 'store'])->name('regsiter');
Route::get('/login', [LoginController::class, 'index']);
Route::post('/check',[LoginController::class,'check'])->name('check');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware("auth")->group(function(){
  
});
Route::get('/student.dash',[StudentController::class,'index'])->name('student.dash');

Route::get('/loginPost',[LoginController::class,'loginPost'])->name('login.post');
Route::get('/student.create',[StudentController::class,'create'])->name('student.create');
Route::get('/student.update/{id}',[StudentController::class,'show']);
Route::get('/student.delete/{id}',[StudentController::class,'destroy']);
Route::put('update-data/{id}',[StudentController::class,'update']);
Route::post('/stored',[StudentController::class,'store'])->name('stored');

Route::get('/users',[StudentController::class,'users'])->name('users');
Route::get('/parents',[StudentController::class,'parents'])->name('parents');


Route::get('/addstaffs',function(){
    return view('addstaffs');
})->name('/addstaffs');
Route::post('/stores',[StaffController::class,'store'])->name('stores');

Route::get('/ostaffs',[StaffController::class,'ostaffs'])->name('/ostaffs');
Route::get('/nostaffs',[StaffController::class,'nostaffs'])->name('/nostaffs');
Route::get('/salary',[StaffController::class,'salary'])->name('/salary');



Route::get('/event',function(){
    return view('event');
})->name('event');
Route::get('/dashboard',function(){
    return view('dashboard');
})->name('dashboard');

Route::get('/time',function(){
    return view('timetable');
})->name('time');

Route::get('/exam',function(){
    return view('exam');
})->name('exam');

Route::get('/fees',function(){
    return view('fees');
})->name('fees');

Route::get('/expenses',function(){
    return view('expenses');
})->name('expenses');

Route::get('/readstud',function(){
    return view('readstudents');
})->name('readstud');


Route::get('/Expense.create', [ExpenseController::class, 'create'])->name('Expense.create');
Route::post('/Expense.store',[ExpenseController::class, 'store'])->name('Expense.store');
