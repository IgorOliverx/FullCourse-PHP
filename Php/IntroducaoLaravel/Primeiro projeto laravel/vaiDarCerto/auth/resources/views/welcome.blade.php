@extends('layouts.main')

@section('title', 'home')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <div id="search-container" class="col-md-12" style="background-image: url({{asset('img/a.jpg')}})">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    <div id="events-container" class="col-md-12">
        <h2>Próximos eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            <img src="{{asset('img/a.jpg')}}" alt="s">
            @foreach($events as $event)
                <div class="card col-md-3">
                    <img src="{{asset('img/a.jpg')}}" alt="{{$event->title}}">
                    <div class="card-body">
                        <p class="card-date">06/10/2006</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <div class="card-participants">X participantes</div>
                        <a href="" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
