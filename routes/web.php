<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Project;

Route::get('/', function () {
    $projects = Project::all();
    return view('welcome',['projects' => $projects]);
});

Route::get('/home', function () {
    return view('welcome');
});

// Projects route

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/create', [ProjectController::class, 'create']);
Route::post('/projects', [ProjectController::class, 'store']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);
// Mail routing
Route::post('/mail', [MailController::class, 'sendEmail' ]);
Route::get('/mail', [MailController::class, 'showForm' ]);