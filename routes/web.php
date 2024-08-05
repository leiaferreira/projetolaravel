<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Event;

Route::get('/', [Event::class, 'index'] );
Route::get('/events/create', [Event::class, 'create']);
Route::get('/cadastro/cadastros', [Event::class, 'register'] );

Route::get('/contato/contact', [Event::class, 'contatos'] );


Route::get('/produto1/produto/{id}', [Event::class, 'product'] );

Route::get('/produto2/produtos', [Event::class, 'products'] );
