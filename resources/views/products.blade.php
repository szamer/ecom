@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 top_menu ">
            <div class=" text-white .bg-info .text-uppercase offset-2 font-weight-bold align-middle h-100" >Products</div>
        </div>
        <div class="d-flex" id="products_container">
            <a href="/add-products" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add product</a>
            <div class="col-xs-12 col-md-6"> 
                <div class="products_container rounded" >
                    @foreach($products as $product)
                        <div class="category_box shadow rounded" >
                            <div><p class="category_title">{{ $product->product_name}}</p></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-12 col-md-4"> 
                <div class="products_container rounded" >
                    @foreach($products as $product)
                        <div class="category_box shadow rounded" >
                            <div><p class="category_title">{{ $product->quantity}}</p></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-12 col-md-4"> 
                <div class="products_container rounded" >
                    @foreach($products as $product)
                        <div class="category_box shadow rounded" >
                            <div><p class="category_title">{{ $product->category_name}}</p></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
