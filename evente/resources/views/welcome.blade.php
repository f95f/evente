@extends('layout.main')
@section('title', 'Evente | Página Inicial')

@section('content')

<div id="search-container" class="col-md-12">
    <div id = "mask">
        
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id = "txtSeach" name = "txtSeach" class = "form-control" placeholder="Procurar... ">
        </form>

    </div>
</div>
<div id="events-container" class="col-md-12">
    
    <h2>Próximos eventos</h2>
    <p class = "subtitle">Veja os eventos dos próximos dias</p>

    <div id="cards-container" class="row">

        @foreach($eventos as $event)

            <div class="card col-md-3">
                <img src="/img/events/{{ $event -> image}}" alt="{{$event -> title}}">
                <div class="card-body">

                    <p class="card-date">10/10/1010 
                        <span class = "card-city">
                            <ion-icon name="location-outline"></ion-icon>    
                            {{$event -> city}}
                        </span>
                    </p>
                    
                    <hr>
                    <h5 class="card-title">{{$event -> title}}</h5>
                    <p class="card-description">{{$event -> description}}</p>
                    <p class="card-participants">X Participantes</p>
                    <hr>
                    <a href="/evento/{{ $event -> id }}" class="btn btn-primary">Saber mais</a>

                </div>
            </div>

        @endforeach

    </div>

</div>
@endsection
