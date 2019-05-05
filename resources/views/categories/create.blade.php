@extends('layout')

@section('main_content')
    <div class="container">
        <div class="col-lg-12">

            {!!Form::open(['route'=>['category.store']])!!}
            <div>
                <br>
                <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                {{Form::label('name', 'Nom de la categorie')}}
                <br>
                {{Form::text('name')}}
                {{$errors->first('name','<p class="help-block">:message</p>')}}
                </div>
            </div>
            <div>
                <div class="form-group {{$errors->has('slug') ? 'has-error' : ''}}">
                {{Form::label('slug', 'slug')}}
                <br>
                {{Form::text('slug')}}
                {{$errors->first('slug','<p class="help-block">:message</p>')}}
                </div>
            </div>
            <div>
                <br>
                {{Form::submit('Envoyer', ['class'=>'btn btn-primary'])}}
            </div>
            <br>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

