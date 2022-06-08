@extends('layouts.app')
@section('content')

<div class="justify-content-center row">
    <div class="col-md-12 w-75">
        <div class="col-12 mb-2 text-end">
            <a href="{{ route('home') }}" class="btn" style=" color:rgb(28, 25, 25) ;background-color: rgb(245, 182, 11)">Back</a>
        </div>
        <form method="post" enctype="multipart/form-data" action="{{ route('price-types.store') }}">
            @csrf
            @method('POST') 

            <div class="card text-dark bg-warning">

                <div class="card-header">
                    <h2 class="text-center">Create Price Type</h2>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                            <div class="row">
                                <div class="col-12 alert alert-danger p-1 m-0">
                                    <ul class="g-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class="row  p-3">
                            <label for="name" class="col-md-2 col-form-label fs-4 fw-semibold">Name <b class="text-danger">*</b></label>
                            <div class="col-md-10">
                                <input type="text" id="name" class="form-control" value="{{ old('name') }}" name="name"
                                    placeholder="Enter PriceType name" required autofocus>
                            </div>
                        </div>

                        
                </div>
                <div class="card-footer float-end">
                    <button type="submit" class="rounded" style=" color:rgb(245, 240, 240) ;background-color: rgb(23, 24, 20)" >Add Price Type</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection