<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// start game
Route::get('/', [MainController::class, 'startGame'])->name('start_game');
Route::post('/', [MainController::class, 'prepareGame'])->name('prepare_name');

// in game
Route::get('/game', [MainController::class, 'game'])->name('game');
Route::get('/answer/{answer}', [MainController::class, 'answer'])->name('answer');
Route::get('/next_question', [MainController::class, 'nextQuestion'])->name('next_question');

// game over
Route::get('/show_results', [MainController::class, 'showResults'])->name('show_results');
