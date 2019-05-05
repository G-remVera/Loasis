@extends('layout')
@section('main_content')
    <div class="starter-template">
        <br>
        <h1>{{$concert->name_concert}}</h1>
        <br>
        <div class="col-lg-12 text-center">
            <img class="img-thumbnail" src="{{$concert->img}}" alt="image non chargée">
        </div>
        <br>
        <p class="lead">{{$concert->description_concert}}</p>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{route('concerts.index')}}" type="button" class="btn btn-secondary">Retour</a>
            @if(Auth::check())
                <a href="{{url('concerts/'.$concert->id.'/edit')}}" class="btn btn-primary">Modifier</a>
                {!!Form::open(['method'=>'DELETE','concert.destroy'])!!}
                {{Form::submit('Supprimer', ['class'=>'btn btn-danger'])}}
                {!! Form::close() !!}
            @endif
            <br>
        </div>
    </div>
@endsection
