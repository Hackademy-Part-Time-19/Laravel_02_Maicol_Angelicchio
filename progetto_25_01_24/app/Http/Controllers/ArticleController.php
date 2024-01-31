<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public $articoli = [
        ['titolo'=>'Telefono', 'descrizione'=>'È un telefono', 'categoria'=>'Elettronica'],
        ['titolo'=>'Divano', 'descrizione'=>'È un divano', 'categoria'=>'Mobili'],
        ['titolo'=>'Pentola', 'descrizione'=>'È una pentola', 'categoria'=>'Cucina'],
        ['titolo'=>'Tuta', 'descrizione'=>'È una tuta sportiva', 'categoria'=>'Sport']
    ];

    public function articoli(){
        return view('articoli', ['articoli'=>$this->articoli]);
    }

    public function articoloSingolo($id){
        return view('articolo', ['articolo'=>$this->articoli[$id]]);
    }
}
