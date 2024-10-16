@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Order Management</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Table of orders -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->product->name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->total_price }}</td>
                        <td>{{ $order->status }}</td>
                        <td>
                            <a href="{{ route('order.update', $order->id) }}" class="btn btn-primary">Update Status</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Form for adding a new order -->
        <form action="{{ route('order.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="product">Product</label>
                <select name="product_id" id="product" class="form-control">
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Add Order</button>
        </form>
    </div>
@endsection
