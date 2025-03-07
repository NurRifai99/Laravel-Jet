<?php

use App\Livewire\Posts\Create;
use App\Livewire\Posts\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/post',Index::class)->name('posts.index');
Route::get('/create',Create::class)->name('posts.create');