<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Event extends Controller
{
    public function index(){
        return view('welcome');

    }


    public function create(){

        return view('events.create');
    }

    public function contatos(){
        return view('contato.contact');
    }
    public function register(){
        return view('cadastro.cadastros');
    }
    public function product($id = null){                          
        return view('produto1.produto', ['id' => $id]);
    }
    public function products (){
        $busca = request('sanches');
        return view('produto2.produtos', ['busca' => $busca]);
    }



}
