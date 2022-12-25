<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('contacts', [ContactController::class, 'contacts']);

Route::get('get_contact/{id}', [ContactController::class, 'getContact']);

Route::post('save_contact', [ContactController::class, 'saveContact']);

Route::delete('delete_contact/{id}', [ContactController::class, 'deleteContact']);

Route::post('update_contact/{id}', [ContactController::class, 'updateContact']);


