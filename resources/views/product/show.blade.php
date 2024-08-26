<!-- resources/views/product/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Details</h1>
        
        <div class="product-details">
            <h2>{{ $product->name }}</h2>
            <p><strong>Price:</strong> {{ number_format($product->price * 3700) }} UGX</p> <!-- Example with conversion -->
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
            <a href="{{ route('product.index') }}" class="btn btn-secondary">Back to Products</a>
        </div>
    </div>
@endsection
