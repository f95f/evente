@extends('layout.main')

@section('title', $evento -> title . ' | Evente')
@section('content')

    <div class="col-md-10 offset-md-1">

        <div class="row">

            <div id="img-container" class = "col-md-6">
                <img src="/img/events/{{ $evento -> image }}" class = "img-fluid" alt="{{ $evento -> title }}">
            </div>

            <div id="info-container" class="col-md-6">

                <h1>{{ $evento -> title }}</h1>
                <p class = "event-city">
                    <ion-icon name="location-outline"></ion-icon> 
                    {{ $evento -> city }}
                </p>
                <p class="event-participants">
                    <ion-icon name = "people-outline"></ion-icon>
                    X Participantes
                </p>
                <p class="event-owner">
                    <ion-icon name = "star-outline"></ion-icon>
                    Dono do Evento            
                </p>
                <a href="pudim.com.br" class="btn btn-primary" id = "event-submit"> Confirmar Presença</a>

            </div>
            <div id = "description-container" class="col-md-12">
                
                <h3>Sobre o evento</h3>
                <p class = "event-description"> {{ $evento -> description }}</p>

            </div>
        </div>
    </div>

@endsection