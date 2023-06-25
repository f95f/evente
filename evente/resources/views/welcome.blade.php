@extends('layout.main')
@section('title', 'Evente | Página Inicial')

@section('content')

<div id="search-container" class="col-md-12">

    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id = "txtSeach" name = "txtSeach" class = "form-control" placeholder="Procurar... ">
    </form>

</div>
<div class="mask" style="background-color: hsla(0, 0%, 0%, 0.6)"></div>
<div id="events-container" class="col-md-12">
    
    <h2>Próximos eventos</h2>
    <p>Veja os eventos dos próximos dias</p>

    <div id="cards-container" class="row">

        @foreach($eventos as $event)

            <div class="card col-md-3">

                <img src="img/evente-logo.png" alt="{{$event -> title}}">
                <div class="card-body">

                    <p class="card-date">10/10/1010</p>
                    <h5>{{$event -> title}}</h5>
                    <p class="card-participants">X Participantes</p>
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div>

        @endforeach

    </div>

</div>
@endsection
