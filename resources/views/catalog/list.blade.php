@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card bg-light text-center w-100 mb-4">
        <div class="card-body">
            <h2 class="card-title">Our Products</h2>
        </div>
    </div>
    <div class="card-columns text-center">
        @foreach ($products->all() as $product)
            <div class="card bg-light mr-4 mb-4">
                <img class="card-img" src="/storage/images/{{ $product->getImg() }}" alt="{{ $product->getName() }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $product->getName() }}</h4>
                    <p class="card-text">Price ${{ $product->getPrice() }}</p>
                </div>
                <form method="POST" action="/showitem{{ $product->getId() }}">
                    @csrf
                    <button class="btn btn-secondary my-2" type="submit">See details</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
