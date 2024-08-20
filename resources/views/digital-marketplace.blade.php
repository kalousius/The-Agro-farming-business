<!-- resources/views/digital-marketplace.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Digital Marketplace for Farm Produce</h1>
        
        <div class="marketplace-overview">
            <h2>Available Products</h2>
            <!-- List of products -->
            <div class="products">
                @foreach($products as $product)
                    <div class="product-item">
                        <h3>{{ $product->name }}</h3>
                        <p>Price: ${{ $product->price }}</p>
                        <p>{{ $product->description }}</p>
                        <a href="{{ route('product.details', $product->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
