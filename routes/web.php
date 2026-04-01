<?php

// Všechny "use" (importy) hezky pohromadě nahoře
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProtocolController;
use Illuminate\Support\Facades\Route;

// ==========================================
// VEŘEJNÉ STRÁNKY (přístupné všem)
// ==========================================
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/kamerove-systemy', function () { return view('sluzby.kamery'); })->name('sluzby.kamery');
Route::get('/anteny-a-satelity', function () { return view('sluzby.anteny'); })->name('sluzby.anteny');
Route::get('/opravy-elektroniky', function () { return view('sluzby.servis'); })->name('sluzby.servis');
Route::get('/tvorba-webu', function () { return view('sluzby.weby'); })->name('sluzby.weby');

Route::get('/kontakt', function () { return view('kontakt'); })->name('kontakt');
Route::post('/kontakt', [ContactController::class, 'send'])->name('kontakt.send');

Route::get('/galerie', [GalleryController::class, 'index'])->name('galerie');

// ==========================================
// ZABEZPEČENÉ STRÁNKY (pouze pro přihlášené)
// ==========================================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profil uživatele
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Administrace
Route::middleware('auth')->group(function () {
    
    // GALERIE - Bezpečně schovaná pod heslem
    Route::get('/admin/galerie', function () { return view('admin.gallery'); })->name('gallery.create');
    Route::post('/admin/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');

    // PROTOKOLY
    // Výpis, vytváření a ukládání
    Route::get('/admin/protokoly', [ProtocolController::class, 'index'])->name('protocols.index');
    Route::get('/admin/protokoly/novy', [ProtocolController::class, 'create'])->name('protocols.create');
    Route::post('/admin/protokoly', [ProtocolController::class, 'store'])->name('protocols.store');
    
    // Odkaz pro stažení PDF
    Route::get('/admin/protokoly/{protocol}/pdf', [ProtocolController::class, 'downloadPdf'])->name('protocols.pdf');

    // Úprava
    Route::get('/admin/protokoly/{protocol}/upravit', [ProtocolController::class, 'edit'])->name('protocols.edit');
    Route::put('/admin/protokoly/{protocol}', [ProtocolController::class, 'update'])->name('protocols.update');

    // Smazání protokolu
    Route::delete('/admin/protokoly/{protocol}', [ProtocolController::class, 'destroy'])->name('protocols.destroy');
});

require __DIR__.'/auth.php';