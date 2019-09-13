<?php

Route::middleware('web')->namespace('App\\Interfaces\\Portal\\Controllers')->group(function($router) {
    $router->get('/', function() {
        return view('portal::pages.home');
    });
});

// End of file
