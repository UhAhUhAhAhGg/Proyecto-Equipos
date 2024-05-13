<?php

use App\Http\Controllers\ProfileController;
use App\Mail\RecuperadoMailable;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::get('Recuperado', function(){
            
    Mail::to('pedro.santos@ucb.edu.bo')
    ->send(new RecuperadoMailable());

    return 'Mensaje Enviado';
})->name('recuperado');
*/
Route::get('hola',function(){
    return'hola';
});



require __DIR__.'/auth.php';
