@extends('layout')

@section('main_content')
    <div class="container">
        <div class="col-lg-12">
            {!!Form::model($artiste,['route'=>['categories.update',$artiste->id],'method'=>'PUT'])!!}
            <div>
                {{Form::label('name', 'Nom de la categorie')}}
                <br>
                {{Form::text('name')}}
            </div>
            <div>
                {{Form::label('slug', 'slug')}}
                <br>
                {{Form::text('slug')}}
            </div>
            <div>
                <br>
                {{Form::submit('Envoyer', ['class'=>'btn btn-primary'])}}
            </div>
                {{Form::submit('Envoyer', ['class'=>'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
