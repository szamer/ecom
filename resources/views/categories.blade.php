@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 top_menu ">
            <div class=" text-white .bg-info .text-uppercase offset-2 font-weight-bold align-middle h-100" >Categories</div>
        </div>
        <div class="d-flex" id="category_container">
            <a href="/add-category" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add category</a>
            <div class="col-xs-12 col-md-6"> 
                <div class="category_container rounded" >
                    @foreach($categories as $category)
                        <div class="category_box shadow rounded" >
                            <div><p class="category_title">{{ $category->title}}</p></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
