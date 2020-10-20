@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card bg-light text-center w-100 mb-4">
        <div class="card-body">
            <h2 class="card-title">Our Products</h2>
        </div>
    </div>
    <div class="card-columns text-center">
        @for ($i = 0; $i < 20; $i++)
            <div class="card bg-light mr-4 mb-4">
                <img class="card-img" src="/images/diamanthia_logo.png" alt="ProductIMGPlaceholder">
                <div class="card-body">
                    <h4 class="card-title">Product placeholder {{ $i }}</h4>
                    <p class="card-text">Product description placeholder {{ $i }}</p>
                    <p class="card-text">Price: Price placeholder {{ $i }}</p>
                </div>
                <div>
                    <form action="post">
                    </form>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection