<?php

use Illuminate\Support\Facades\Route;
use Modules\Base\Http\Controllers\BaseController;



Route::get("/dashboard",[BaseController::class,"index"])->name("dashboard");

