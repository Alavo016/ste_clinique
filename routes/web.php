<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DoctorDashboardController;
use App\Http\Controllers\InfirmierDashboardController;
use App\Http\Controllers\patient;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/faqs', [patient::class, 'faqs'])
    ->name('patient.faqs');

Route::get('/contact', [patient::class, 'contact'])
    ->name('patient.contact');

Route::get('/dashboard', function () {
    return view('patients.Acceuil');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])
            ->name('admin.dashboard');

        Route::get('/statitique', [AdminDashboardController::class, 'statistique'])
            ->name('admin.statistique');

        Route::get('/listdocteur', [AdminDashboardController::class, 'listdocteur'])
        ->name('admin.listdocteur');

        // Route pour enregistrer un nouvel utilisateur
        Route::post('/listdocteur', [AdminDashboardController::class, 'store'])
        ->name('admin.store_docteur');

    });

    Route::prefix('doctor')->group(function () {
        Route::get('/dashboard', [DoctorDashboardController::class, 'index'])
            ->name('doctor.dashboard');
    });

    Route::prefix('infirmier')->group(function () {
        Route::get('/dashboard', [InfirmierDashboardController::class, 'index'])
            ->name('infirmier.dashboard');
    });

    Route::prefix('patient')->group(function () {




        Route::get('/dossier', [patient::class, 'dossier'])
        ->name('patient.dossier');

        Route::get('/rdv', [patient::class, 'rdv'])
        ->name('patient.rdv');
    });
});



require __DIR__ . '/auth.php';
