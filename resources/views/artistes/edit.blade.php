@extends('layout')

@section('main_content')
    <div class="container">
        <div class="col-lg-12">
            {!!Form::model($artiste,['route'=>['artistes.update',$artiste->id],'method'=>'PATCH'])!!}
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
                {{Form::label('tags[]', 'Tag')}}
                <br>
                {{Form::select('tags[]',App\Tag::pluck('name','id'),$artiste->tags->pluck('id'),['class'=>'form-control', 'multiple'=>true])}}
            </div>
            <div>
                {{Form::label('Biographie', 'Biographie')}}
                <br>
                {{Form::textarea('biography')}}
            </div>
            <div>
                {{Form::label('Logo', 'lien du logo')}}
                <br>
                {{Form::text('logo')}}
            </div>
            <div>
                {{Form::label('Instagram', 'Instagram')}}
                <br>
                {{Form::text('instagram')}}
                <br>
            </div>
            <div>
                {{Form::label('Facebook', 'Facebook')}}
                <br>
                {{Form::text('facebook')}}
                <br>
            </div>
            <div>
                {{Form::label('Youtube', 'Youtube')}}
                <br>
                {{Form::text('youtube')}}
                <br>
            </div>
            <div>
                {{Form::label('BandCamp', 'BandCamp')}}
                <br>
                {{Form::text('bandcamp')}}
                <br>
            </div>
            <div>
                {{Form::label('Site Web', 'Site Web')}}
                <br>
                {{Form::text('Site Web')}}
                <br>
            </div>
            <div>
                <br>
                {{Form::submit('Envoyer', ['class'=>'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
