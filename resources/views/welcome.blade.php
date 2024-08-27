@extends('layouts.main')

@section('title', 'Pagina Inicial')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Práximos eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
        <div class="card p-0 col-md-3 rounded m-2">
            <img src="/img/evento.jpeg" class="rounded-top" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">10/09/2024</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants"> x participantes</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
    
