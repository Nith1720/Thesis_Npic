<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ThesisController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GenerationController;
use App\Http\Controllers\ScoreController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'login']);
Route::post('login_post', [AuthController::class, 'login_post']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register_post', [AuthController::class, 'register_post']);
Route::get('forgot', [AuthController::class, 'forgot']);


Route::group(['middleware' => 'admin' ], function(){
    Route::get('admin/dashboard', [DashboardController::class, 'index']);
    Route::get('admin/student/list', [StudentController::class, 'index']);

});

Route::group(['middleware' => 'student' ], function(){
    Route::get('student/dashboard', [DashboardController::class, 'index']);

});

// Department

Route::get('admin/department/list', [DepartmentController::class, 'index']);
Route::get('admin/department/add', [DepartmentController::class, 'add']);
Route::post('admin/department/add', [DepartmentController::class, 'store']);
Route::get('admin/department/delete/{id}', [DepartmentController::class, 'delete_department']);
Route::get('admin/department/edit/{id}', [DepartmentController::class, 'edit']);
Route::post('admin/department/edit/{id}', [DepartmentController::class, 'edit_update']);

// Teacher

Route::get('admin/teacher/list', [TeacherController::class, 'index']);
Route::get('admin/teacher/add', [TeacherController::class, 'add']);
Route::post('admin/teacher/add', [TeacherController::class, 'store']);
Route::get('admin/teacher/delete/{id}', [TeacherController::class, 'delete_teacher']);
Route::get('admin/teacher/edit/{id}', [TeacherController::class, 'edit']);
Route::get('admin/teacher/show/{id}', [TeacherController::class, 'show']);
Route::post('admin/teacher/edit/{id}', [TeacherController::class, 'edit_update']);



// Student

Route::get('admin/student/list', [StudentController::class, 'index']);
Route::get('admin/student/add', [StudentController::class, 'add']);
Route::post('admin/student/add', [StudentController::class, 'store']);
Route::get('admin/student/delete/{id}', [StudentController::class, 'delete_student']);
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);
Route::post('admin/student/edit/{id}', [StudentController::class, 'edit_update']);


// Thesis

Route::get('admin/thesis/list', [ThesisController::class, 'index']);
Route::get('admin/thesis/add', [ThesisController::class, 'add']);
Route::post('admin/thesis/add', [ThesisController::class, 'store']);
Route::get('admin/thesis/delete/{id}', [ThesisController::class, 'delete_thesis']);
Route::get('admin/thesis/edit/{id}', [ThesisController::class, 'edit']);
Route::post('admin/thesis/edit/{id}', [ThesisController::class, 'edit_update']);


// Score

Route::get('admin/score/list', [ScoreController::class, 'index']);
Route::get('admin/score/add', [ScoreController::class, 'add']);
Route::post('admin/score/add', [ScoreController::class, 'store']);
Route::get('admin/score/delete/{id}', [ScoreController::class, 'delete_score']);
Route::get('admin/score/edit/{id}', [ScoreController::class, 'edit']);
Route::post('admin/score/edit/{id}', [ScoreController::class, 'edit_update']);


//Generation

Route::get('admin/generation/list', [GenerationController::class, 'index']);
Route::get('admin/generation/add', [GenerationController::class, 'add']);
Route::post('admin/generation/add', [GenerationController::class, 'store']);
Route::get('admin/generation/delete/{id}', [GenerationController::class, 'delete_generation']);
Route::get('admin/generation/edit/{id}', [GenerationController::class, 'edit']);
Route::post('admin/generation/edit/{id}', [GenerationController::class, 'edit_update']);


Route::get('admin/department/list', [DepartmentController::class, 'index']);
Route::get('admin/thesis/list', [ThesisController::class, 'index']);
Route::get('admin/teacher/list', [TeacherController::class, 'index']);



Route::get('logout', [AuthController::class, 'logout']);