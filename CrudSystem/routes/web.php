<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostCRUDController;

Route::resource('/posts', PostCRUDController::class);
