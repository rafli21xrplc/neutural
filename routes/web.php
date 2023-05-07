<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\WisataController;
use App\Models\category;
use Illuminate\Support\Facades\Route;

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
    return view('welcome', [
        "title" => "Welcome"
    ]);
})->middleware('guest');


Route::controller(loginController::class)->group(function () {
    Route::get('/SignIn', 'viewSignIn');
    Route::post('/SignIn', 'auth')->name('login');
    Route::get('/SignUp', 'viewSignUp');
    Route::post('/SignUp', 'store');
    Route::post('/LogOut', 'LogOut');
});


Route::controller(WisataController::class)->group(function () {
    Route::get('/Homepage', 'index')->name('homepage');
    Route::post('/Homepage', 'store');
    Route::post('/HomepageUpdated/{id}', 'storeUpdated');
    Route::get('/detail/{id}', 'detail');
})->middleware('auth');


Route::get('/Market', function () {
    return view('market', [
        "title" => "Marketplace"
    ]);
})->middleware('auth');

Route::controller(adminController::class)->group(function () {
    Route::get('/Dashboard', 'dashboard')->name('dashboardWisata');
    Route::get('/UpdatedWisata/{id}', 'updated');
    Route::post('/UpdateWisata', 'store');
    Route::get('/DeletedWisata/{id}', 'deleted');
})->middleware('auth');

Route::get('/Product', function () {
    return view('Admin.DetailProduct', [
        "title" => "Dashboard"
    ]);
});

Route::get('/CreatedWisata', function () {
    return view('Admin.CreatedWisata', [
        "title" => "Created Wisata",
        "datasCategory" => category::all()
    ]);
});

Route::get('/CreatedProduct', function () {
    return view('Admin.CreatedProduct', [
        "title" => "Created Product"
    ]);
});

Route::get('/UpdatedProduct', function () {
    return view('Admin.UpdatedProduct', [
        "title" => "Updated Product"
    ]);
});

Route::get('/OverviewProduct', function () {
    return view('Overview', [
        "title" => "Overview Product"
    ]);
});

Route::get('/DetailWisata', function () {
    return view('DetailWisata', [
        "title" => "Detail Wisata"
    ]);
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/category', 'index')->name('category');
    Route::post('/category', 'store');
});
