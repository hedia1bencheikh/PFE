<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Middleware\CheckGouvernorat;



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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/test',[RoleController::class,'test'])->middleware(['auth','checkGouvernorat:17']);
Route::get('/test44', [App\Http\Controllers\RoleController::class, 'test44'])->name('test44');

/*----- GESTION DES ROLES -----*/ 
Route::GET('/role/create', [App\Http\Controllers\RoleController::class, 'create'])->name('roles.create');

Route::GET('/roles/index', [App\Http\Controllers\RoleController::class, 'index'])->name('roles.index');


Route::GET('/role/show/{id}', [App\Http\Controllers\RoleController::class, 'show'])->name('roles.show');
Route::POST('/create/store', [App\Http\Controllers\RoleController::class, 'store'])->name('roles.store');
Route::get('/role/edit/{id}', [App\Http\Controllers\RoleController::class, 'edit'])->name('roles.edit');
Route::post('/role/update/{id}', [App\Http\Controllers\RoleController::class, 'update'])->name('role.update');
//Route::get('/role/delete/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('role.delete');


/*----- GESTION DES UTILISATSEURS -----*/ 
Route::GET('/users/index', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::GET('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::POST('/user/create/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');

/*

Route::GET('/role/show/{id}', [App\Http\Controllers\RoleController::class, 'show'])->name('roles.show');
*/

/*----- GESTION DES fonctionnalités -----*/ 
Route::GET('/permissions/index', [App\Http\Controllers\PermissionController::class, 'index'])->name('permissions.index');
Route::get('/permission/edit/{id}', [App\Http\Controllers\PermissionController::class, 'edit'])->name('permission.edit');
Route::post('/permission/update/{id}', [App\Http\Controllers\PermissionController::class, 'update'])->name('permission.update');






