<!-- resources/views/products/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>

        <!-- Product Image (Optional) -->
        @if($product->image)
            <div class="product-image">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
            </div>
        @endif

        <!-- Product Details -->
        <div class="product-details">
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Price:</strong> UGX {{ number_format($product->price) }}</p>
            <p><strong>Category:</strong> {{ $product->category->name ?? 'N/A' }}</p>
            <p><strong>Availability:</strong> {{ $product->stock > 0 ? 'In Stock' : 'Out of Stock' }}</p>
        </div>

        <!-- Add to Cart Button (Optional) -->
        <div class="product-actions">
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
        </div>

        <!-- Back to Products List -->
        <div class="mt-4">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
        </div>
    </div>
@endsection

@section('styles')
<style>
    .product-image img {
        max-width: 100%;
        height: auto;
    }
    .product-details p {
        margin: 10px 0;
    }
    .btn {
        padding: 10px 20px;
        margin: 5px;
    }
</style>
@endsection
