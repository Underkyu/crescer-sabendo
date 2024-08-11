<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\OngController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\LoginController;


// Paginas padrão
Route::get('/', function () {
    return view('user/index');
});
Route::get('/donates', function () {
    return view('user/doacoes');
});
Route::get('/ongs', function () {
    return view('user/ongs');
});


// Registro, Login e Logout
Route::get('/signin', function () {
    return view('user/signIn');
});
Route::post('/login', [LoginController::class, 'login']);
Route::get('/signup', function () {
    return view('user/signUp');
});
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');




// Ong
Route::get('/ong/signup', function () {
    return view('user/ong/signUp');
});
Route::get('/ong/account', function () {
    return view('user/ong/account');
});
Route::get('/ong/courses', function () {
    return view('user/ong/courses');
});
Route::get('/ong/mural', function () {
    return view('user/ong/mural');
});
Route::get('/ong/volunteer', function () {
    return view('user/ong/volunteer');
});


// Aluno
Route::get('/aluno/signup', function () {
    return view('user/aluno/signUp');
});
Route::post('/createaluno', [AlunoController::class, 'create']);


// Professor
Route::get('/prof/signup', function () {
    return view('user/prof/signUp');
});
Route::post('/createprofessor', [ProfessorController::class, 'create']);
Route::get('/teste', function () {
    return view('teste');
});

// Admin
Route::get('/admin', function () {
    return view('admin/adminPage');
});
Route::get('/aprovarong', function () {
    return view('admin/aprovarOng');
});
