@extends('layout')
@section('main_content')
    <h1 class="col-12">Liste des artistes</h1>
    <div class="row">
        @foreach($categories as $category)
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{route('categories.show',['categories'=>$category->id])}}">{{$category->name}}</a>
                        </h4>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
