@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{ $event->image }}" class="image-fluid" alt="{{ $event->title }}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $event->title }}</h1>
            <p class="event-city"><i class="bi bi-geo-alt"></i> {{ $event->city }}</p>
            <p class="events-participants"><i class="bi bi-people"></i> {{ count($event->users) }} Participantes</p>
            <p class="event-owner"><i class="bi bi-star"></i> {{$eventOwner['name']}}</p>
            @if (!$hasUserJoined)

            <form action="{{ route('events.entry',['id' => $event->id]) }}" method="POST">
                @csrf
                <a href="{{ route('events.info', ['id' => $event->id])  }}" class="btn btn-primary" id="event-submit" onclick="event.preventDefault(); this.closest('form').submit()">
                    Confirmar presença</a>
            </form>

            @else

            <p class="already-joined-msg"> Você ja está participado desse evento!</p>
            
            @endif
            <h3>O evento conta com:</h3>
            <ul id="items-list">
                @foreach ($event->items as $item)
                    <li><i class="bi bi-play"></i><span>{{ $item }}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre o evento:</h3>
            <p class="event-description">{{ $event->description }}</p>
        </div>
    </div>
</div>

@endsection