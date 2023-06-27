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

    public function store(Request $request){

        $event = new Event;
        $event -> title = $request -> txtTitle;
        $event -> city = $request -> txtCidade;
        $event -> private = $request -> txtPrivado;
        $event -> description = $request -> txtDesc;

        if($request -> hasFile('image') && $request -> file('image') -> isValid()){

            $requestImage = $request -> image;

            $extension = $requestImage -> extension();
            $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage -> move(public_path('img/events'), $imageName);

            $event -> image = $imageName;
        }

        $event -> save();
        return redirect('/')->with('msg', 'Evento Criado!');
    }

    public function show($id){

        $evento = Event::findOrFail($id);
        return view("evento.mostrar", ['evento' => $evento]);

    }
}
