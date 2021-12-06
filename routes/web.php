<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudPostController;

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

Route::get('allposts', [CrudPostController::class, 'index']);
Route::get('posting', [CrudPostController::class, 'add']);
Route::post('posting', [CrudPostController::class, 'store']);

Route::resource('posts', 'CrudPostController');

Route::get('crudpost', [CrudPostController::class, 'crudindex'] );


//Route::get('find', [PostController::class, '']);
//App\Models\post::store()
