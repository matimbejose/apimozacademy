<?php

use App\Http\Controllers\API\PassportAuthController;
use App\Http\Controllers\API\ProductController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/login', 'UserController@login');


// Route::group(
//     [
//       'namespace'=>'Auth',
//       'middleware'=>'api', 
//       'prefix' => 'auth', 
//       'as'=> 'user.auth.'
//     ]
//     , function () {
//      Route::post('register', 'PassportAuthController@register');
//      Route::post('login', 'PassportAuthController@login');
//      Route::post('logout', 'AuthController@logout');
//      Route::post('refresh', 'AuthController@refresh');
//      Route::post('me', 'AuthController@me');
//  });

Route::post('resgiter',  [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);


Route::middleware('auth:api')->group(function () {
    Route::get('get-user', 'PassportAuthController@userInfo');
    Route::resource('posts', 'PostController');
});