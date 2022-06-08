@extends('layouts.app')

@section('content')
<h2  style="color:rgb(217, 143, 5)" class="text-center text-">Welcome to the <span class="fs-1 fw-semibold">MINI E-commerce Site</span></h2>
<img class="rounded mt-5 mx-auto d-block" src="images/e-image.png" alt="">
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('categories.index')}}">Categories</a>
                    <a href="{{ route('products.index')}}">Products</a>
                    <a href="{{ route('priceTypes.index')}}">PriceTypes</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
