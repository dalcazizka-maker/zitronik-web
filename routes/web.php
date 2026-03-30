<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Veřejné stránky
Route::get('/', function () { return view('welcome'); })->name('home');
Route::get('/kamerove-systemy', function () { return view('sluzby.kamery'); })->name('sluzby.kamery');
Route::get('/anteny-a-satelity', function () {return view('sluzby.anteny');})->name('sluzby.anteny');
Route::get('/opravy-elektroniky', function () {return view('sluzby.servis');})->name('sluzby.servis');
Route::get('/tvorba-webu', function () {return view('sluzby.weby');})->name('sluzby.weby');
Route::get('/kontakt', function () { return view('kontakt'); })->name('kontakt');
Route::post('/kontakt', [ContactController::class, 'send'])->name('kontakt.send');
Route::get('/galerie', function () {return view('galerie');})->name('galerie');

// Zabezpečený dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profil uživatele
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Administrace (přístupné pouze po přihlášení)
Route::middleware('auth')->group(function () {
    
    // Výpis, vytváření a ukládání
    Route::get('/admin/protokoly', [App\Http\Controllers\ProtocolController::class, 'index'])->name('protocols.index');
    Route::get('/admin/protokoly/novy', [App\Http\Controllers\ProtocolController::class, 'create'])->name('protocols.create');
    Route::post('/admin/protokoly', [App\Http\Controllers\ProtocolController::class, 'store'])->name('protocols.store');
    
    // Odkaz pro stažení PDF
    Route::get('/admin/protokoly/{protocol}/pdf', [App\Http\Controllers\ProtocolController::class, 'downloadPdf'])->name('protocols.pdf');

    // Místo, kde se stala chyba - tyto dva řádky pro editaci ti tam chyběly
    Route::get('/admin/protokoly/{protocol}/upravit', [App\Http\Controllers\ProtocolController::class, 'edit'])->name('protocols.edit');
    Route::put('/admin/protokoly/{protocol}', [App\Http\Controllers\ProtocolController::class, 'update'])->name('protocols.update');

    // Smazání protokolu
    Route::delete('/admin/protokoly/{protocol}', [App\Http\Controllers\ProtocolController::class, 'destroy'])->name('protocols.destroy');
});