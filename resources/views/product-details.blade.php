<!-- resources/views/product-details.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        
        <div class="product-details">
            <p>Price: ${{ $product->price }}</p>
            <p>{{ $product->description }}</p>
            <p>Quantity Available: {{ $product->quantity }}</p>

            <!-- Add to cart functionality can be added here -->
            <form method="POST" action="{{ route('add.to.cart', $product->id) }}">
                @csrf
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" min="1" max="{{ $product->quantity }}" required>
                </div>
                <button type="submit" class="btn btn-success">Add to Cart</button>
            </form>
        </div>
    </div>
@endsection
