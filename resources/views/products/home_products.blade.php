@extends('layout')

@section('content')

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="{{ $product["image_url"] }}" alt="Card image cap">
                        <div class="card-body">
                           <a href="{{ route("product", $product["title"]) }}"> <p class="card-text">Product :: {{ $product["title"] }}</p> </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
      </div>
    </div>
@endsection
