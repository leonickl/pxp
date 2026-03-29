<?php

use App\Controllers\ExampleController;
use PXP\Router\Route;

Route::get('/')->do(ExampleController::class, 'index');
