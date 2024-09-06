@extends('layouts.main')

@section('title', 'Tabela de Eventos')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if (count($events) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>

                </tr>
            </thead>
        <tbody>
            @foreach ($events as $event )
            <tr>
                <td scropt="row">{{ $loop->index + 1 }}</td>
                <td><a href="{{ route('events.info',['id' => $event->id]) }}">{{ $event->title }}</a></td>
                <td>{{ count($event->users) }}</td>
                <td>
                    <a href="{{ route('events.details',[ 'id' => $event->id]) }}" class="btn btn-info edit-btn"> <i class="bi bi-pencil-square"></i> Editar</a>
                    <form action="{{ route('events.destroy', ['id' => $event->id ] ) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><i class="bi bi-trash"></i> Deletar</button>
                    </form>
            </tr>
            @endforeach
        </tbody>
        </table>

    @else
        <p>Você ainda não tem eventos, <a href="{{ route('events.create') }}">criar evento</a></p>
    @endif
</div>
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Eventos que participo</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if (count($eventsasparticipant) > 0)
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($eventsasparticipant as $event )
            <tr>
                <td scropt="row">{{ $loop->index + 1 }}</td>
                <td><a href="{{ route('events.info',['id' => $event->id]) }}">{{ $event->title }}</a></td>
                <td>{{ count($event->users) }}</td>
                <td>
                    <form action="{{ route('events.leave',['id' => $event->id]) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger delete-btn">
                        <i class="bi bi-box-arrow-right"> Sair do Evento</i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    @else
    <p>Você ainda não está participando de nenhum evento, <a href="{{route('home') }}">veja todos os eventos</a></p>
    @endif
</div>
@endsection