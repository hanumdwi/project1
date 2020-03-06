@extends('layout/main')

@section('title', 'Customer')

@section('container')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Detail Customer</h2>
            </div>
            
            <div class="card">
            <div class="card-body">
            <h5 class="card-title">{{ $cus -> customer_id }}</h5>
            <h5 class="card-title">{{ $cus -> first_name }}</h5>
            <h5 class="card-title">{{ $cus -> last_name }}</h5>
            <h5 class="card-title">{{ $cus -> phone }}</h5>
            <h5 class="card-title">{{ $cus -> email }}</h5>
            <h5 class="card-title">{{ $cus -> street }}</h5>
            <h5 class="card-title">{{ $cus -> city }}</h5>
            <h5 class="card-title">{{ $cus -> state }}</h5>
            <h5 class="card-title">{{ $cus -> zip_code }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
</section>

@endsection