<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaffBranchController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\StaffController;

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

//Route Basic
Route::get('/hello', function () {
    echo '<center>';
    echo '<u> Hello semuanya, apa kabar?<br></u>';
    echo '<u> Pada kali ini kita sedang belajar Route basic </u>';
});

Route::get('/pages1', function () {
    return view('pages1.index');
});

Route::get('/pages2', function () {
    return view('pages2.index');
});

Route::get('/pages3', function () {
    return view('pages3.index');
});

Route::get('/home', function () {
    return view('home');
});

//route parameter
//program biodata
Route::get('/biodata/{nama}/{umur}/{alamat}/{jk}/{hobi}', function ($nama,$umur,$alamat,$jk,$hobi) {
    return view('pages1.biodata', compact('nama','umur','alamat','jk','hobi'));
});


//route optional parameter
//program material
Route::get('/pesanan/{material?}/{material1?}', function ($material='-',$material1='-') {
    return view('pages1.pesanan', compact('material','material1'));
});

//Passing data controller ke view
Route::get('/pengenalan', [App\Http\Controllers\PengenalanController::class, 'pengenalan']);

//passing data dinamis
Route::get('/intro/{nama}/{alamat}/{umur}', [PengenalanController::class, 'intro']);

Route::get('/pengenalan2', [App\Http\Controllers\PengenalanController::class, 'siswa']);

Route::get('/menu', [App\Http\Controllers\LatihanController::class,'menu']);

Route::get('kampus',[App\Http\Controllers\Latihancontroller::class,'kampus']);

Route::get('/tv', [App\Http\Controllers\LatihanController::class, 'tv']);


Route::get('/belanja' ,[App\Http\Controllers\LatihanController::class, 'belanja']);

Route::get('/post', [PostController::class, 'index']);

Route::get('/migration', [App\Http\Controllers\StaffBranchController::class, 'index']);

Route::get('/migration1', [App\Http\Controllers\BranchController::class, 'Branch']);

Route::get('/migration2', [App\Http\Controllers\StaffController::class, 'index']);