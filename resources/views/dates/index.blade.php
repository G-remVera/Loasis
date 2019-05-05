@extends('layout')
@section('main_content')
    <h1 class="col-12">Liste des dates</h1>
    <div class="row">
        @foreach($dates as $date)
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{route('artistes.show',['artistes'=>$artiste->id])}}">{{$artiste->name}}</a>
                        </h4>

                        @if($artiste->category)
                            <p class="card-text">{{$artiste->category->name}}</p>
                        @endif
                        <p class="card-text">{{$artiste->biography}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
