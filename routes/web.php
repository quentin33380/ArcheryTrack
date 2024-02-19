<?php

use App\Models\Arcs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
    return view('accueil');
})->name('accueil');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/article', function () {
    return view('article');
})->name('article');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function(){
    //route du profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Route des arcs
    Route::get('/arcs/{arc}', function ($arcs) {
        $arcs = Arcs::findOrFail($arcs);
        return view('arcs.profil', ['arcs' => $arcs]);
    })->name('arcs.profil');

});

require __DIR__.'/auth.php';
