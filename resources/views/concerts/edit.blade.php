@extends('layout')

@section('main_content')
    <div class="container">
        <div class="col-lg-12">
            {!!Form::model($concert,['route'=>['concerts.update',$concert->id],'method'=>'PUT'])!!}
            <div>
                <br>
                {{Form::label('Nom', 'Nom du Concert')}}
                <br>
                {{Form::text('name_concert')}}
            </div>
            <br>
            <div>
                {{Form::label('artistes[]', 'Artiste')}}
                <br>
                {{Form::select('artistes[]',App\Artist::pluck('name','id'),$concert->artistes->pluck('id'),['class'=>'form-control'])}}
            </div>
            <br>
            <div>
                {{Form::label('categories_id', 'Catégorie du Concert')}}
                <br>
                {{Form::select('category_id',$category,$concert->category_id)}}
            </div>
            <br>
            <div>
                {{Form::label('Decription du concert', 'Decription du concert')}}
                <br>
                {{Form::textarea('description_concert')}}
            </div>
            <br>
            <div>
                {{Form::label('Affiche du concert', 'Affiche du concert')}}
                <br>
                {{Form::text('img')}}
            </div>
            <br>
            <div>
                {{Form::submit('Envoyer', ['class'=>'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
