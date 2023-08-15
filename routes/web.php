<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function(){
    return view('blog');
});
/*
Route::any('/any', function(){
    return 'Permite todo o tipo de acesso http (put, delete, get, post)';
});

Route::match(['get', 'post']'/match', function(){
    return "Permite apenas acesso definido";
})
*/
Route::redirect('/esqueci', '/cadastro0');
