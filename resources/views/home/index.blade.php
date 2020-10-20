@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card bg-light">
            <div class="card-body text-center">
                <h4 class="card-title">Diamanthia Home Page</h4>
                <p class="card-text">
                    Welcome to Diamanthia!
                </p>
                <p class="card-text">
                    Explore our products at the store section of this page
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card bg-light text-center">
        <div class="card-body">
            <div class="card-title">
                Featured Products
            </div>
            <div id="carouselFadeExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner text-center" role="listbox">
                    <!-- Generate 10 placeholder items, we'll later add real ones -->
                    @foreach ($featured_products->all() as $product)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="d-flex justify-content-center">
                                <img src="/storage/images/{{ $product->getImg() }}" alt="{{ $product->getName() }}" height="200px" width="auto">
                                <div class="d-flex flex-column justify-content-center w-50 pl-1">
                                    <h3> {{ $product->getName() }} </h3>
                                    <p> {{ $product->getDescription() }} </p>
                                    <p> Price: ${{ $product->getPrice() }} </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon amber-text" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon amber-text" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </div>
</div>
@endsection
