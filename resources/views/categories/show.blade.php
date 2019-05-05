@extends('layout')
@section('main_content')
    <div class="starter-template">
        <h1>{{$artiste->name}}</h1>
        <img class="img-thumbnail" src="{{$artiste->logo}}" alt="">
        <p class="lead">{{$artiste->biography}}</p>
        <a href="{{route('artistes.index')}}" class="btn btn-primary">Retour</a>
        <a href="{{url('artistes/'.$artiste->id.'/edit')}}" class="btn btn-primary">Modifier</a>
        {!!Form::open(['method'=>'DELETE','artistes.destroy'])!!}
            {{Form::submit('Supprimer', ['class'=>'btn btn-danger'])}}
        {!! Form::close() !!}
    </div>
@endsection
