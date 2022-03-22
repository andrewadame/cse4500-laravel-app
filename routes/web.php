<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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
    return view('create');
});

Route::get('todos', function () {
    return view('todos');
});

Route::get('calendar', function () {
    return view('calendar');
});

Route::get('board', function () {
    return view('board');
});

Route::get('events-feed', function () {
    
    $arr = array(['title' => 'CSE4500 Class', 'start' => '2022-02-23T17:30:00', 'end' => '2022-02-23T18:45:00'],
             ['title' => 'CSE4500 Class', 'start' => '2022-02-23T17:30:00', 'end' => '2022-02-23T18:45:00']);
    echo json_encode($arr)."\n";
        return view('events-feed');
});

Route::fallback(function () {
    return view('error');
});

Route::get('/db-test', function () {
    try {
	echo "Database Connected: ";         
        echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});

Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});

Route::resource('/todos', TodoController::class);
