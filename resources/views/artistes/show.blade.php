@extends('layout')
@section('main_content')
    <div class="starter-template">
        <h1>{{$artiste->name}}</h1>
        <div class="row">
            <div class="col-lg-4">
                <img class="img-thumbnail" src="{{$artiste->logo}}" alt="">
            </div>
            <div class="col-lg-8">
                <a target="_blank" href="{{$artiste->facebook}}">Page Facebook</a>
                <br>
                <a target="_blank" href="{{$artiste->instagram}}">Page Instagram</a>
                <br>
                <a target="_blank" href="{{$artiste->youtube}}">Page Youtube</a>
                <br>
                <a target="_blank" href="{{$artiste->siteweb}}">SIte Web</a>
                <br>
                <p>Categorie : {{$artiste->category->name}}</p>
                <br>
                <label for="Biography"><b>Biographie:</b></label>
                <p class="lead">{{$artiste->biography}}</p>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{route('artistes.index')}}" type="button" class="btn btn-secondary">Retour</a>
                @if(Auth::check())
                    <a href="{{url('artistes/'.$artiste->id.'/edit')}}" class="btn btn-primary">Modifier</a>
                    {!!Form::open(['method'=>'DELETE','artistes.destroy'])!!}
                    {{Form::submit('Supprimer', ['class'=>'btn btn-danger'])}}
                    {!! Form::close() !!}
                @endif
                <br>
            </div>
        </div>
    </div>
@endsection
