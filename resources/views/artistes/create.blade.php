@extends('layout')

@section('main_content')
    <div class="container">
        <div class="col-lg-12">
            @include('errors.errors')
            {!!Form::open(['route'=>['artistes.store']])!!}
            <div>
                {{Form::label('Nom', 'Nom de l\'artiste :')}}
                <br>
                {{Form::text('name')}}
            </div>
            <br>
            <div>
                {{Form::label('category_id', 'Catégorie de l\'artiste :')}}
                <br>
                {{Form::select('category_id',$category,$artiste->category_id)}}
            </div>
            <br>
            <div>
                {{Form::label('tags[]', 'Tag :')}}
                <br>
                {{Form::select('tags[]',App\Tag::pluck('name','id'),null,['class'=>'form-control', 'multiple'=>true])}}
            </div>
            <br>
            <div>
                {{Form::label('Biographie', 'Biographie :')}}
                <br>
                {{Form::textarea('biography')}}
            </div>
            <br>
            <div>
                {{Form::label('Logo', 'lien du logo :')}}
                <br>
                {{Form::text('logo')}}
            </div>
            <div>
                {{Form::label('Instagram', 'Instagram :')}}
                <br>
                {{Form::text('instagram')}}
                <br>
            </div>
            <div>
                {{Form::label('Facebook', 'Facebook :')}}
                <br>
                {{Form::text('facebook')}}
                <br>
            </div>
            <div>
                {{Form::label('Youtube', 'Youtube :')}}
                <br>
                {{Form::text('youtube')}}
                <br>
            </div>
            <div>
                {{Form::label('BandCamp', 'BandCamp')}}
                <br>
                {{Form::text('bandcamp :')}}
                <br>
            </div>
            <div>
                {{Form::label('Site Web', 'Site Web')}}
                <br>
                {{Form::text('siteweb :')}}
                <br>
            </div>
            <div>
                <br>
                {{Form::submit('Envoyer', ['class'=>'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
            <br>
        </div>
    </div>
@endsection

