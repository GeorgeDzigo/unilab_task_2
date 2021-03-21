@extends('layout')

@section('content')

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
            @for ($i = 0; $i < count($ids); $i++)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="{{ $products[$ids[$i]]["image_url"] }}" alt="Card image cap">
                        <div class="card-body">
                           <a href="{{ route("product", $ids[$i]) }}"> <p class="card-text">Product :: {{ $products[$ids[$i]]["title"] }}</p> </a>
                        </div>
                    </div>
                </div>
            @endfor




        </div>
      </div>
    </div>
@endsection
