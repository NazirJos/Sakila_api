<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FilmActorController;
use App\Http\Controllers\FilmCategoryController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FilmTextController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StoreController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//actor endpoint
Route::resource('actor', ActorController::class);
Route::get('/actor/search/{name}', [ActorController::class, 'search']);

//adress endpoint
Route::resource('address', AddressController::class);
Route::get('/address/search/{name}', [AddressController::class, 'search']);

//category endpoint
Route::resource('category', CategoryController::class);
Route::get('/category/search/{name}', [CategoryController::class, 'search']);

//city endpoint
Route::resource('city', CityController::class);
Route::get('/city/search/{name}', [CityController::class, 'search']);

//country endpoint
Route::resource('country', CountryController::class);
Route::get('/country/search/{name}', [CountryController::class, 'search']);

//customer endpoint
Route::resource('customer', CustomerController::class);
Route::get('/customer/search/{name}', [CustomerController::class, 'search']);

//film endpoint
Route::resource('film', FilmController::class);
Route::get('/film/search/{name}', [FilmController::class, 'search']);

//film actor endpoint
Route::resource('film-actor', FilmActorController::class);
Route::get('/film-actor/search/{name}', [FilmActorController::class, 'search']);

//film category endpoint
Route::resource('film-category', FilmCategoryController::class);
Route::get('/film-category/search/{name}', [FilmCategoryController::class, 'search']);

//film text endpoint
Route::resource('film-text', FilmTextController::class);
Route::get('/film-text/search/{name}', [FilmTextController::class, 'search']);

//inventory endpoint
Route::resource('inventory', InventoryController::class);
Route::get('/inventory/search/{name}', [InventoryController::class, 'search']);

//language endpoint
Route::resource('language', LanguageController::class);
Route::get('/language/search/{name}', [LanguageController::class, 'search']);

//payment endpoint
Route::resource('payment', PaymentController::class);
Route::get('/payment/search/{name}', [PaymentController::class, 'search']);

//rental endpoint
Route::resource('rental', RentalController::class);
Route::get('/rental/search/{name}', [RentalController::class, 'search']);

//staff endpoint
Route::resource('staff', StaffController::class);
Route::get('/staff/search/{name}', [StaffController::class, 'search']);

//store endpoint
Route::resource('store', StoreController::class);
Route::get('/store/search/{name}', [StoreController::class, 'search']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
