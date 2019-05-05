@extends('layout')

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {!!Form::open(['route'=>['concerts.store']])!!}
                <div>
                    <br>
                    {{Form::label('Nom du Concert', 'Nom du Concert :')}}
                    <br>
                    {{Form::text('name_concert')}}
                </div>
                <br>
                <div>
                    {{Form::label('Description du concert', 'Decription du concert :')}}
                    <br>
                    {{Form::textarea('description_concert')}}
                </div>
                <br>
                <div>
                    {{Form::label('artiste[]', 'Artiste :')}}
                    <br>
                    {{Form::select('artiste[]',App\Artist::pluck('name','id'),null,['class'=>'form-control'])}}
                </div>
                <br>
                <div>
                    {{Form::label('category_id', 'Catégorie du concert :')}}
                    <br>
                    {{Form::select('category_id',$category,$concert->category_id)}}
                </div>
                <br>
                <div>
                    {{Form::label('Affiche du concert', 'Affiche du concert :')}}
                    <br>
                    {{Form::text('img')}}
                </div>
                <br>
                <div>
                    {{Form::submit('Envoyer', ['class'=>'btn btn-primary'])}}
                </div>
                {!! Form::close() !!}
                <br>
            </div>
        </div>
    </div>
@endsection
