<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return [
        'name'    => config('app.name'),
        'version' => '1.0.0',
        'author'  => 'Edwin Bayog',
        'email'   => 'edwinbayog07@gmail.com',
        'website' => 'https://portfolio-naaivvv.netlify.app',
    ];
});
