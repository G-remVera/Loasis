@extends('layout')
@section('main_content')
    <h1 class="col-12">Liste des Concerts</h1>
    <div class="row">
        @foreach($concerts as $concert)
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <img class="card-img-top" src="{{$concert->img}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{route('concerts.show',['concerts'=>$concert->id])}}">{{$concert->name_concert}}</a>
                        </h4>
                        <p class="card-text">{{$concert->description_concert}}</p>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
