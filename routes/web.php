<?php

use App\Http\Controllers\Front\Courses\CoursesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\Formation\FormationsController;
use App\Http\Controllers\Front\Offers\OffersController;
use App\Http\Controllers\Front\Thematique\ThematiquesController;

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

// Les fonctions du contoleur Front-end
Route::get('/', [FrontController::class, 'accueil'])->name('home');
Route::get('/login', [FrontController::class, 'loginFunction'])->name('login');
Route::get('/register', [FrontController::class, 'registerFunction'])->name('register');
Route::get('/formations', [FormationsController::class, 'indexFunction'])->name('formations');
Route::get('/thematiques', [ThematiquesController::class, 'indexFunction'])->name('thematiques');
Route::get('/blog', [FrontController::class, 'blogFunction'])->name('blog');
Route::get('/offers', [OffersController::class, 'indexFunction'])->name('offers');
Route::get('/courses/{libelle}', [CoursesController::class, 'indexFunction'])->name('courses');
Route::get('/courses/{libelle}/{title}', [CoursesController::class, 'moduleFunction'])->name('courses.suivi');
Route::get('/partnaires', [FrontController::class, 'partnairesFunction'])->name('partnaires');