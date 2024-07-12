<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesWebController;

Route::get('/inicio', function () {
    return view('estudiantes.home');
})->name('estudiantes.home');




Route::get('/estudiantes', [EstudiantesWebController::class, 'index'])->name('estudiantes.index');
Route::get('/estudiantes/create', [EstudiantesWebController::class, 'create'])->name('estudiantes.create');
Route::post('/estudiantes', [EstudiantesWebController::class, 'store'])->name('estudiantes.store');
Route::get('/estudiantes/{id}/edit', [EstudiantesWebController::class, 'edit'])->name('estudiantes.edit');
Route::put('/estudiantes/{id}', [EstudiantesWebController::class, 'update'])->name('estudiantes.update');
Route::delete('/estudiantes/{id}', [EstudiantesWebController::class, 'destroy'])->name('estudiantes.destroy');




Route::get('/', function () {
    return view('welcome');
});
