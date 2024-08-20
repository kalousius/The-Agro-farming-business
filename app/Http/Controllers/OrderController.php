<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('product')->get(); // Fetch orders with related products
        $products = Product::all(); // Fetch all products for the form
        return view('order-management', compact('orders', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);
        $totalPrice = $product->price * $request->quantity;

        Order::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
            'status' => 'pending', // Default status
        ]);

        return redirect()->route('order.management')->with('success', 'Order added successfully.');
    }

    // Method to update order status
    public function update($id)
    {
        $order = Order::findOrFail($id);
        // Logic to update order status (e.g., mark as delivered)
        $order->status = 'delivered'; // Example status update
        $order->save();

        return redirect()->route('order.management')->with('success', 'Order status updated.');
    }
}
