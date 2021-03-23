@extends('layout')

@section('content')
<a type="button" class="btn btn-primary ml-5"  href="{{ route("home") }}">Go back</a>
<br>
<br>
<center >
    <div class="row" style="width: 100%;">
        <div class="col-sm-6 push-bit">
            <a href="#" class="gallery-link"><img src="{{ $product["image_url"] }}" alt="" class="img-responsive push-bit" width="85%" /></a>
        </div>
        <div class="col-sm-4 push-bit" style="text-align: left;">
            <div class="clearfix">
                <div class="pull-right">
                    <span class="h2"><strong>$ 69</strong></span>
                </div>
                <span class="h4">
                    <strong class="text-success">{{ $product["title"] }}</strong><br />
                    <small>15 Available</small>
                </span>
            </div>
            <hr />
            <p>
                Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque
                non accumsan orci.
            </p>
            <hr />
            <form class="form-inline push-bit text-right">
                <select id="ecom-addcart-size" name="ecom-addcart-size" class="form-control" size="1">
                    <option value="0" disabled="" selected="">SIZE</option>
                    <option value="xs">XS</option>
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                    <option value="xxl">XXL</option>
                </select>
                <button type="submit" class="btn btn-info" style="margin-left: 15px">Add to Cart</button>
            </form>
        </div>
    </div>

    <div class="album py-5  mt-5">
        <hr>
        <h1 class="text-center">Check some other products</h1>
        <br />
        <div class="container">

          <div class="row">
              @foreach ($products as $prod)
                @if ($prod["title"] != $product["title"])
                <div class="col-md-6">
                    <div class="card mb-2 shadow-sm">
                        <img class="card-img-top" src="{{ $prod["image_url"] }}" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route("product", $prod['title']) }}"> <p class="card-text" style='font-size: 25px'>Product :: {{ $prod["title"] }}</p> </a>
                        </div>
                    </div>
                </div>
                @endif
              @endforeach
          </div>
        </div>
      </div>
</center>

@endsection
