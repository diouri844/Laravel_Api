<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// create new router :

// use the imported model :

// use ressource :

Route::resource('Products',ProductController::class);

// get request for search :

Route::get('/Products/search/{name}',[ProductController::class,'search']);

// use simple routing system :
/*
Route::get('/Products', [ProductController::class, 'index']);

Route::post('/Products', [ProductController::class, 'store']);

Route::get('/Products/{id}', [ProductController::class , 'show']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
return $request->user();
});
*/
