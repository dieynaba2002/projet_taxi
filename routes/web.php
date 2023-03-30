<?php

use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\ClientdController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\DashBoardController;


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

Route::get('/', function () {
    return view('index');
    
    
    
    
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::group(['middleware' => ['auth']], function() { 
Route::get('/dashboard', 'App\Http\Controllers\DashBoardController@index')->name('dashboard');

});

Route::resource('clients',ClientdController::class);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('adminlogin', function () {
    return view('admin/index');
});
Route::get('dashboard1', function () {
    return view('admin/dashboard1');
});


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

Route::get('/', function () {
    
    return view('index');  
    
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashBoardController@index')->name('dashboard');

});

//Declaration des routes pour client et chauffeur
Route::resource('clients',ClientdController::class);
Route::resource('chauffeurs',ChauffeurController::class);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('adminlogin', function () {
    return view('admin/index');
});
Route::get('dashboard1', function () {
    return view('admin/dashboard1');
});

Route::get('admin/utilisateur',[RegisteredUserController::class,'usersdata']);

Route::get('/admin/create', [ZoneController::class, 'create'])->name('zonepage');
Route::post('/store', [ZoneController::class, 'store']);

Route::get('/admin/createTrajet', [TrajetController::class, 'create'])->name('trajetpage');
Route::post('/storeTrajet', [TrajetController::class, 'storeTrajet']);

Route::get('trajet/{zoneId}', [ClientdController::class, 'getByRegion']);
Route::get('getTarif/{trajetId}', [ClientdController::class, 'getTarif']);