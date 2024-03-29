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

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(App\Http\Controllers\TeacherController::class)->group(function () {
    Route::get('teachers', 'index')->middleware(['auth:sanctum']);;
    Route::get('teachers/{id}', 'show');
    Route::post('teachers', 'store');
    Route::put('teachers/{id}', 'update');
    Route::delete('teachers/{id}', 'destroy');
    // Route::get('teacher/category/{id}', 'filter')->middleware(['auth:sanctum', 'permission:filter teachers']);
})->middleware(['auth:sanctum', 'role:admin']);

Route::controller(App\Http\Controllers\StudentController::class)->group(function () {
    Route::get('students', 'index')->middleware(['auth:sanctum']);
    Route::get('students/{id}', 'show');
    Route::post('students', 'store');
    Route::put('students/{id}', 'update');
    Route::delete('students/{id}', 'destroy');
    // Route::get('students/category/{id}', 'filter')->middleware(['auth:sanctum', 'permission:filter teachers']);
})->middleware(['auth:sanctum', 'role:admin']);

Route::controller(App\Http\Controllers\ClassroomController::class)->group(function () {
    Route::get('classes', 'index')->middleware(['auth:sanctum']);
    Route::get('classes/{id}', 'show');
    Route::post('classes', 'store');
    Route::put('classes/{id}', 'update');
    Route::delete('classes/{id}', 'destroy');
    // Route::get('classes/category/{id}', 'filter')->middleware(['auth:sanctum', 'permission:filter teachers']);
})->middleware(['auth:sanctum', 'role:admin']);

Route::controller(App\Http\Controllers\EventController::class)->group(function () {
    Route::get('events', 'index');
    Route::get('events/{id}', 'show');
    Route::post('events', 'store');
    Route::put('events/{id}', 'update');
    Route::delete('events/{id}', 'destroy');
    // Route::get('events/category/{id}', 'filter')->middleware(['auth:sanctum', 'permission:filter teachers']);
})->middleware(['auth:sanctum', 'role:admin']);

Route::controller(App\Http\Controllers\HomeWorkController::class)->group(function () {
    Route::get('homeworks', 'index')->middleware(['auth:sanctum']);
    Route::get('homeworks/{id}', 'show')->middleware(['auth:sanctum']);
    Route::post('homeworks', 'store')->middleware(['auth:sanctum']);
    Route::put('homeworks/{id}', 'update')->middleware(['auth:sanctum']);
    Route::delete('homeworks/{id}', 'destroy')->middleware(['auth:sanctum']);
    // Route::get('homeworks/category/{id}', 'filter')->middleware(['auth:sanctum', 'permission:filter teachers']);
});

Route::controller(App\Http\Controllers\ResultController::class)->group(function () {
    Route::get('subjects', 'getSubjects')->middleware(['auth:sanctum']);
    Route::get('results', 'index');
    Route::get('results/{id}', 'show');
    Route::post('results', 'store')->middleware(['auth:sanctum']);
    Route::put('results/{id}', 'update');
    Route::delete('results/{id}', 'destroy');
    // Route::get('results/category/{id}', 'filter')->middleware(['auth:sanctum', 'permission:filter teachers']);
});

Route::controller(App\Http\Controllers\AbsenceController::class)->group(function () {
    Route::get('absences', 'index');
    Route::get('absences/{id}', 'show');
    Route::post('absences', 'store')->middleware(['auth:sanctum']);
    Route::put('absences/{id}', 'update')->middleware(['auth:sanctum']);
    Route::delete('absences/{id}', 'destroy');
    // Route::get('results/category/{id}', 'filter')->middleware(['auth:sanctum', 'permission:filter teachers']);
});

Route::controller(App\Http\Controllers\statisticController::class)->group(function () {
    Route::get('getResultForEachStudent', 'getResultForEachStudent')->middleware(['auth:sanctum']);
    Route::get('getAbsencesByMonth', 'getAbsencesByMonth');
    Route::get('getHome_worksCount', 'getHome_worksCount');
    Route::get('getAverageMarksBySubject', 'getAverageMarksBySubject');
    Route::get('adminDash', 'adminDashboard');
    Route::get('teacherCount', 'teachersCount');
    Route::get('studentCount', 'studentsCount');
    Route::get('classroomCount', 'classroomCount');
    Route::get('eventCount', 'eventCount');
    Route::get('incomingEvents', 'getIncomingEvents');
    Route::get('incomingEventsCount', 'getIncomingEventsCount');
    Route::get('absencesCount', 'getAbsenceCount');
    // Route::delete('students/{id}', 'destroy');
    // Route::get('students/category/{id}', 'filter')->middleware(['auth:sanctum', 'permission:filter teachers']);
});