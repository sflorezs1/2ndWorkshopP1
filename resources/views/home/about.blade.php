@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <img src="/images/diamanthia_logo.png" alt="diamanthia_logo" class="card-img">
            <div class="card-body">
                <h2 class="card-title">About Us</h2>
                <p class="card-text">
                    We are a small Jewelry Store that offers an online catalog.
                </p>
                <div class="card m-4">
                    <div class="card-body">
                        <h4 class="card-title"> <i class="fas fa-envelope"></i> E-mail</h4>
                        <p class="card-text">
                            example@mail.com
                        </p>
                    </div>
                </div>
                <div class="card m-4">
                    <div class="card-body">
                        <h4 class="card-title"> <i class="fas fa-phone"></i> Phone </h4>
                        <p class="card-text">
                            SomeFakeNumber
                        </p>
                    </div>
                </div>
                <div class="card m-4">
                    <div class="card-body">
                        <h4 class="card-title"> <i class="fas fa-location-arrow"></i> Location </h4>
                        <p class="card-text">
                            Not a real place in earth
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection