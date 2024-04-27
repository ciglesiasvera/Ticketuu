<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Route;

Route::apiResource('clients', ClientController::class);

Route::apiResource('tickets', TicketController::class);

Route::get('/events', [EventController::class, 'index']);

Route::get('/event/{id}', [EventController::class, 'show']);

Route::get('/orders', [OrderController::class, 'index']);

Route::post('/purchase', [PurchaseController::class, 'store']);
