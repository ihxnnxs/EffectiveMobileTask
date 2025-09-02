<?php

use App\Http\Controllers\Api\TaskController;

Route::resource('/tasks', TaskController::class)->except(['create', 'edit']);
