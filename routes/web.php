<?php

use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UniversiteController;
use App\Http\Controllers\UserController;
use App\Models\Universite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $user = Auth::user();
    $universities = Universite::all();
    return view('dashboard', compact('user', 'universities'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


route::get('admin/dashboard',[HomeController::class,'index']);

route::get('delete/{id}',[HomeController::class,'destroy']);
Route::get('admin/users', [UserController::class,'show'])->name('admin.users');
Route::get('admin/universities/create', [UniversiteController::class, 'create'])->name('university.create');
Route::post('admin/universities/store', [UniversiteController::class, 'store'])->name('university.store');
Route::get('/universities/{id}', [UniversiteController::class, 'show'])->name('university.show');
Route::post('/universities/{id}/comments', [NoteController::class, 'store'])->name('comment.store');

Route::get('/admin/critere', [NoteController::class, 'create'])->name('critere.create');
Route::post('/admin/critere', [NoteController::class, 'store'])->name('critere.store');

Route::post('/save-ratings', [NoteController::class, 'store'])->name('ratings.store');
