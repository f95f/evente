<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Event;

class EventoController extends Controller{
    
    public function index(){

        $eventos = Event::all();
        return view('welcome', ['eventos' => $eventos]);

    }

    public function create(){

        return view('evento.criar');

    }
}
