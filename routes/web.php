<?php

use App\Http\Controllers\MainController;

use Illuminate\Support\Facades\Route;


Route::get(
    '/',
    [MainController::class, "home"]
)->name("home");
Route::get(
    '/saint/search/{id}',
    [MainController::class, "searchSaint"]
)->name("saint.search");
Route::get(
    '/saint/destroy/{id}',
    [MainController::class, "destroy"]
)->name("saint.destroy");
Route::get(
    '/saint/create',
    [MainController::class, "createSaint"]
)->name("saint.create");