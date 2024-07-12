<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\estudianteControlador;

Route::get('/estudiantes', [estudianteControlador::Class, 'Index']);

Route::get('/estudiantes/{id}', [estudianteControlador::Class, 'Show']);

Route::post('/estudiantes', [estudianteControlador::Class, 'Store']); 


Route::put('/estudiantes/{id}', [estudianteControlador::Class, 'Update']);

Route::patch('/estudiantes/{id}', [estudianteControlador::Class, 'UpdatePartial']);


Route::delete('/estudiantes/{id}', [estudianteControlador::Class, 'Destroy']);
