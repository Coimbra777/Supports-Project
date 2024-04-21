<?php

use App\Http\Controllers\Admin\SupportController;
use Illuminate\Support\Facades\Route;


// atualizar uma dúvida
Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');

// editar uma dúvida
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');

// exibir detalhes de uma dúvida
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');

// criar nova dúvida
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');

Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');

//  listar todas as dúvidas
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contato', [ContactController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
