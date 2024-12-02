<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('task',[TaskController::class,'index']);


route::get('/',[SiteController::class,"home"])->name('home');
route::get('/menu',[SiteController::class,"menu"])->name('menu');
route::get('/about',[SiteController::class,"about"])->name('about');
route::get('/reservations',[SiteController::class,"reservations"])->name('res');

route::get('/demo/condition',[DemoController::class, 'logic']);