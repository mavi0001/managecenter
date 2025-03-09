<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MinorParticipantController;
use App\Http\Controllers\AdultParticipantController;
use App\Http\Controllers\AdultActivityController;
use App\Http\Controllers\MinorActivityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('minor_participants', MinorParticipantController::class);
    Route::get('/minor-participants/{id}/export/pdf', [MinorParticipantController::class, 'exportPdf'])->name('minor_participants.export.pdf');
    // Route::get('/minor-participants/{id}/export/excel', [MinorParticipantController::class, 'exportExcel'])->name('minor_participants.export.excel');

    Route::resource('adult-participants', AdultParticipantController::class);
    Route::get('/adult-participants/{id}/export/pdf', [AdultParticipantController::class, 'exportPdf'])->name('adult_participants.export.pdf');

    Route::resource('adult-activities', AdultActivityController::class);

    Route::resource('minor-activities', MinorActivityController::class);
});

require __DIR__.'/auth.php';
