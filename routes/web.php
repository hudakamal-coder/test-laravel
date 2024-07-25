<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// Index, Show, Create, Store, Edit, Update, Destroy

// Route::get('notes', [NoteController::class, 'index'])->name('notes.index');
// Route::get('notes/show/{id}', [NoteController::class, 'show'])->name('notes.show');
// Route::get('notes/create', [NoteController::class, 'create'])->name('notes.create');
// Route::post('notes/store', [NoteController::class, 'store'])->name('notes.store');
// Route::get('notes/edit/{id}', [NoteController::class, 'edit'])->name('notes.edit');
// Route::put('notes/update/{id}', [NoteController::class, 'update'])->name('notes.update');
// Route::delete('notes/destroy/{id}', [NoteController::class, 'destroy'])->name('notes.destroy');

Route::resource('/notes', NoteController::class);
