@extends('layouts.front')
@section('title')
    {{ $category->name }}
@endsection

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h3>{{ $category->name }}</h3>
            <div class="owl-carousel featured-carousel owl-theme">
                @foreach ($product as $item)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{ asset('assets/uploads/product/'.$item->image) }}" alt="Product Image">
                    <div class="card-body">
                        <h5>{{ $item->name }}</h5>
                        <span class="float-start">{{ $item->selling_price }}</span>
                        <span class="float-end"> <s>{{ $item->original_price }}</s> </span>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>

@endsection