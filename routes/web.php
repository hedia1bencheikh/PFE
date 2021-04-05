<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Middleware\CheckGouvernorat;



use App\Http\Controllers\ProjetController;
use  App\Http\Livewire\Gouvernorrat;
use App\Http\Controllers\QuartierController;
use App\Http\Controllers\DB;
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







Route::get('affiche/',[App\Http\Controllers\QuartierController::class,'index'])->name('quartier.show');

Route::get('show/',[App\Http\Controllers\GouvernoratController::class,'index'])->name('gouvenorat.affiche');
Route::get('create_1/',[App\Http\Controllers\GouvernoratController::class,'create'])->name('gouvernorat.create');;
Route::post('/submit',[App\Http\Controllers\GouvernoratController::class,'save'])->name('gouvernorat.save');
Route::get('update/{id}',[App\Http\Controllers\GouvernoratController::class,'showdata'])->name('gouvernorat.edit');
Route::post('update_1/',[App\Http\Controllers\GouvernoratController::class,'update'])->name('gouvernorat.update');
Route::get('delete/{id}',[App\Http\Controllers\GouvernoratController::class,'delete']);
Route::get('gouvernorat/search/',[App\Http\Controllers\GouvernoratController::class,'search']);
Route::delete('gouvernorat/{id}',[App\Http\Controllers\GouvernoratController::class,'delete'])->name('gouvernorat.delete');


Route::get('commune/show/',[App\Http\Controllers\CommuneController::class,'index'])->name('commune.affiche');
Route::get('create_commune/',[App\Http\Controllers\CommuneController::class,'create'])->name('commune.create');
Route::get('submit_1/',[App\Http\Controllers\CommuneController::class,'save'])->name('commune.save');
Route::get('search/',[App\Http\Controllers\CommuneController::class,'search']);
Route::delete('commune/{id}',[App\Http\Controllers\CommuneController::class,'delete']);
Route::get('commune/update/{id}',[App\Http\Controllers\CommuneController::class,'showdata'])->name('commune.edit');
Route::post('commune/update_1/',[App\Http\Controllers\CommuneController::class,'update'])->name('commune.update');

Route::get('projet/show/',[App\Http\Controllers\ProjetController::class,'index'])->name('projet.affiche');
Route::get('projet/search/',[App\Http\Controllers\ProjetController::class,'search']);
Route::get('projet/update/{id}',[App\Http\Controllers\ProjetController::class,'showdata'])->name('projet.edit');
Route::get('projet/create/',[App\Http\Controllers\ProjetController::class,'create'])->name('projet.create');
Route::get('projet/gouvernorat10/',[App\Http\Controllers\ProjetController::class,'findProductName'])->name('projet.gouvernorat');
Route::get('projet/commune/',[App\Http\Controllers\ProjetController::class,'findCommune'])->name('projet.commune');
Route::post('submit/commune/',[App\Http\Controllers\ProjetController::class,'save'])->name('projet.save');
Route::post('projet/update/',[App\Http\Controllers\ProjetController::class,'update'])->name('projet.update');

Route::get('tous/',[App\Http\Controllers\QuartierController::class,'tous'])->name('quartier.tous');
Route::get('affiche_1/',[App\Http\Controllers\QuartierController::class,'index_1'])->name('quartier.affiche');
Route::get('quartier/update/{id}',[App\Http\Controllers\QuartierController::class,'showdata'])->name('quartier.update');
Route::post('quartier/update_1/',[App\Http\Controllers\QuartierController::class,'update']);
Route::get('quartier/delete/{id}',[App\Http\Controllers\QuartierController::class,'delete']);
Route::get('quartier/create/',[App\Http\Controllers\QuartierController::class,'create'])->name('quartier.create');
Route::post('quartier/save/',[App\Http\Controllers\QuartierController::class,'save'])->name('quartier.save');
Route::get('affiche_map',[App\Http\Controllers\QuartierController::class,'affiche_map'])->name('affiche_map');


Route::get('projet/aziza/',[App\Http\Controllers\ProjetController::class,'projet_map'])->name('quartier.projet');
Route::get('projet/gouvernorat/',[App\Http\Controllers\ProjetController::class,'tunisie']);
Route::get('Gafsa/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','3')->name('Gafsa');
Route::get('Tunis/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','1')->name('Tunis');
Route::get('Gabes/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','2')->name('Gabés');
Route::get('Sfax/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','4')->name('Sfax');
Route::get('Ariena/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','5')->name('Ariena');
Route::get('Béja/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','6')->name('Béja');
Route::get('Ben_Arous/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','7')->name('Ben_Arous');
Route::get('Bizerte/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','8')->name('Bizerte');
Route::get('Jendouba/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','9')->name('Jandouba');
Route::get('Kairoun/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','10')->name('Kairouan');
Route::get('kassrine/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','11')->name('Kassérine');
Route::get('kebili/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','12')->name('Kebili');
Route::get('Kef/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','13')->name('Kef');
Route::get('Mahdia/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','14')->name('Mahdia');
Route::get('Manubah/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','15')->name('Manubah');
Route::get('Mednine/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','16')->name('Médnine');
Route::get('Monastir/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','17')->name('Monastir');
Route::get('Nabeul/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','18')->name('Nabeul');
Route::get('Sidi_bou_zid/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','19')->name('Sidi_bouzid');
Route::get('Siliana/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','20')->name('Siliana');
Route::get('Sousse/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','21')->name('Sousse');
Route::get('Tatouine/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','22')->name('Tataouine');
Route::get('Tozeur/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','23')->name('Tozeur');
Route::get('Zaghouen/{id}',[App\Http\Controllers\ProjetController::class,'test'])->where('id','24')->name('Zaghouen');
Route::get('essai2/',[App\Http\Controllers\ProjetController::class,'test2']);
Route::get('projet/{id}',[App\Http\Controllers\ProjetController::class,'delete']);
Route::get('commune/{id}/{id1}',[App\Http\Controllers\ProjetController::class,'commune']);
//Route::get('google/',[App\Http\Controllers\QuartierController::class,'google']);
Route::get('essai3/',[App\Http\Controllers\ProjetController::class,'essai3']);
Route::get('google/essai4/',[App\Http\Controllers\QuartierController::class,'essai4']);
Route::get('google/affiche_1/',[App\Http\Controllers\QuartierController::class,'index_1'])->name('quartier.affiche');
Route::get('//',[App\Http\Controllers\QuartierController::class,'essai4']);
Route::get('map/projet/{id}',[App\Http\Controllers\QuartierController::class,'google_projet'])->name('google_projet');
Route::get('tous1/{id}',[App\Http\Controllers\QuartierController::class,'tous1'])->name('tous1');
