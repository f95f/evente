@extends('layout.main')

@section('title', 'Evente | Criar Evento')
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">

    <h1>Crie o seu evento</h1>
    <hr>
    <form action="/evento" method = "post" enctype = "multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="image">Imagem para o evento:</label>
            <input type="file" class="form-control-file" name = "image" id = "image">
        </div>
        <div class="form-group">
            <label for="txtTitle">Evento:</label>
            <input type="text" class="form-control" name = "txtTitle" id = "txtTitle" placeholder="Nome do evento">
        </div>

        <div class="form-group">
            <label for="txtCidade">Cidade:</label>
            <input type="text" class="form-control" name = "txtCidade" id = "txtCidade" placeholder="Local do evento">
        </div>

        <div class="form-group">
            <label for="txtPrivado">O evento é privado?</label>
            <select class="form-control" name = "txtPrivado" id = "txtPrivado">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>

        <div class="form-group">
            <label for="txtDesc">Descrição:</label>
            <textarea name="txtDesc" id="txtDesc" class="form-control" cols="30" rows="5" placeholder="O que acontece no evento?"></textarea>
        </div>
        <hr>
        <input type="submit" id = "btnCriar" class="btn btn-primary" value = "Criar evento">
    </form>

</div>
<div id = ></div>

@endsection