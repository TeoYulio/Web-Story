@extends('layout.main')

@section('container')
    <h1 class="mb-5">Category </h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/post?category={{ $category->slug }}">
                        <div class="card bg-dark text-white mb-5">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                                alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center bg-success flex-fill p-4 rounded fs-3"
                                    style="background-color: rgba(0,0,0,0.7) ">
                                    {{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <style>
        body {
            background-color: #FFF3E6;
        }
    </style>
@endsection
