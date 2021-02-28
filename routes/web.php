<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Emp;
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
Route::get('/user', function () {
    return view('user');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/employee/db', function(){
	DB::table('employee')->insert([
		'name'=>'Damir',
		'age'=>18
	]);
});

Route::get('emp', function(){
	$emp=Emp::find(1);
	return $emp->age;
});