@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ $product->getName() }}</h2>
                <div class="d-flex row justify-content-center">
                    <div class="card bg-light m-4">
                        <img class="card-img" src="/storage/images/{{ $product->getImg() }}" alt="{{ $product->getName() }}">
                        <div class="card-body">
                            <h4 class="card-title">Description</h4>
                            <p class="card-text">
                                {{ $product->getDescription() }}
                            </p>
                            <p class="card-text">
                                Price: ${{ $product->getPrice() }}
                            </p>
                        </div>
                    </div>
                    <div class="card m-4 bg-light">
                        <div class="card-body">
                            <h2 class="card-title">Comments on this product</h2>
                            <div class="container">
                                @foreach ($product->comments as $comment)
                                    <div class="card mt-4">
                                        <div class="card-body">
                                            <h2 class="card-title">{{ $comment->getAuthor() }}</h2>
                                            <div>
                                                @for ($i = 0; $i < $comment->stars; $i++)
                                                    <i class="fas fa-star"></i>
                                                @endfor
                                                @for ($i = $comment->getStars(); $i < 5; $i++)
                                                    <i class="far fa-star"></i>
                                                @endfor
                                            </div>
                                            <p class="card-text">{{ $comment->getContent() }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection