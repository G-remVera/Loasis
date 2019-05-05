@extends('layout')

@section('main_content')
    <div class="container">
        <div class="col-lg-12">
            <h1>Creation de date de concert</h1>
            <div class="form-group">
                {!! Form::open(['route'=>['dates.store']]) !!}
                <div>
                    {{Form::label('concert_id', 'Quel Concert ?')}}

                    {{Form::select('concert_id',$concerts,$dates->concerts_id,['class'=>'form-control','step'=>'any'])}}
                </div>
                <br>
                <div>
                    {{Form::label('date', 'Quelle Date ?')}}

                    {{Form::date('date',null,['class'=>'form-control'])}}
                </div>
                <br>
                <div>
                    {{Form::label('price', 'Quel Prix ?')}}

                    {{Form::number('price',null,['class' => 'form-control','step'=>'any'])}}
                </div>
                <br>
                <div>
                    {{Form::submit('Envoyer', ['class'=>'btn btn-primary'])}}
                </div>
                <br>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

