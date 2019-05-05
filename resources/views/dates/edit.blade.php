@extends('layout')

@section('main_content')
    <div class="container">
        <div class="col-lg-12">
            {!!Form::model($artiste,['route'=>['artistes.update',$artiste->id],'method'=>'PUT'])!!}
            <div>
                {{Form::label('Nom', 'Nom de l\'artiste')}}
                <br>
                {{Form::text('name')}}
            </div>
            <div>
                {{Form::label('category_id', 'Catégorie de l\'artiste')}}
                <br>
                {{Form::select('category_id',$categories,$artiste->category_id)}}
            </div>
            <div>
                <br>
                {{Form::submit('Envoyer', ['class'=>'btn btn-primary'])}}
                <br>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
