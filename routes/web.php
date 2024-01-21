<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\MahaguruController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TutorController;
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

Route::resource('web', WebsiteController::class);
Route::resource('blog', BlogController::class);
Route::resource('fakultas', FakultasController::class);
Route::resource('faq', FaqController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('mahaguru', MahaguruController::class);
Route::resource('tutor', TutorController::class);

Route::get('/mhs', function () {
    return view('admin.dashboard');
});
Route::get('/usr', function () {
    return view('user.dashboard');
});
Route::get('/adm', function () {
    return view('admin.dashboard');
});
Route::get('/sej', function () {
    return view('user.sejarah');
});
Route::get('/stor', function () {
    return view('user.stor');
});
Route::get('/ked', function () {
    return view('user.kedudukan');
});
Route::get('/vimi', function () {
    return view('user.visimisi');
});
Route::get('/tuj', function () {
    return view('user.tujuan');
});



Route::get('/daf', function () {
    return view('admin.pendaftaran');
});

// Route::get('/formulir', function () {
//     return view('user.formulir');
// });

Route::get('/super', function () {
    return view('user.suratpernyataan');
});

Route::get('/dapen', function () {
    return view('admin.pendaftaran');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');  
});

require __DIR__.'/auth.php';

