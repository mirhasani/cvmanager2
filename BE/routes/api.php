<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EducationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', function(){
    return 'Kertop';
});
Route::prefix('admin')->group(function(){
    Route::post('/send-vc', [AuthController::class, 'verify']);
    Route::post('/auth', [AuthController::class, 'auth']);
    Route::apiResource('/profile' , ProfileController::class)->middleware('auth:api');
    Route::apiResource('/education' , EducationController::class)->middleware('auth:api');

});

