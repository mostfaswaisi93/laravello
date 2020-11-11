<?php

use Illuminate\Support\Facades\Route;

// In here...

Route::fallback(function () {
    return view('app');
});
