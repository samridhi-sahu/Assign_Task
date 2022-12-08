<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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
Route::get('excel', function () {
    return view('excel');
});
Route::get('user', [Controller::class, 'user']);
Route::get('admin', [Controller::class, 'admin']);


Route::post('adduser', [Controller::class, 'adduser']);
Route::post('addtask', [Controller::class, 'addtask']);


Route::get('view', [Controller::class, 'view']);
Route::get('show', [Controller::class, 'show']);