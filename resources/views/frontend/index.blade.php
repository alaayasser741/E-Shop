@extends('layouts.front')
@section('title')
    Welcome to E-Shop
@endsection

@section('content')
@include('layouts.side.slider')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h3>Featured Products</h3>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_product as $item)
                <div class="item">
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

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
    </script>
@endsection