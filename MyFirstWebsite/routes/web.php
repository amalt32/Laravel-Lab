<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'home']);
Route::get('admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
Route::get('view_category',[AdminController::class,'view_category'])->name('admin.view_category');
Route::get('agent/dashboard',[AgentController::class,'index'])->name('agent.dashboard');
Route::post('add_category',[AdminController::class,'add_category']);
Route::get('delete_category/{id}',[AdminController::class,'delete_category']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
