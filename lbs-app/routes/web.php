<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('/student', StudentController::class);

use Illuminate\Http\Request;

// Route::get('/token', function (Request $request) {
//     $token = $request->session()->token();

//     $token = csrf_token();

//     dd($token);

//     // ...
// });