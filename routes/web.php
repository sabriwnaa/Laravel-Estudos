<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   
    $nome = 'Sabrina';
    $idade = 17;
    return view('welcome', ['nome' => $nome, 'idade' => $idade]);
});

Route::get('/hello', function () {
    return 'hello, laravel';
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});