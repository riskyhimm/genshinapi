<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/api/characters', [\App\Http\Controllers\Wrapper::class, 'characters'])->name('characters')->name('weapons') -> middleware('npm');
Route::get('/api/weapons', [\App\Http\Controllers\Wrapper::class, 'weapons'])->name('weapons') -> middleware('npm');
Route::get('/api/artifacts', [\App\Http\Controllers\Wrapper::class, 'artifacts'])->name('artifacts') ->name('weapons') -> middleware('npm');
Route::get('/user/identitas', function (){
    return [
        'code' => '0',
        'data' => [
            'npm'=>'197006047',
            'nama'=>'Muhammad Risky Sukma Himawan',
            'email'=>'197006047@student.unsil.ac.id'
        ]
    ];
}) -> middleware('npm');
