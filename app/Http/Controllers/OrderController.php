<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Display the order management page with all orders and products
    public function index()
    {
        // Retrieve all orders with their related product information
        $orders = Order::with('product')->get();

        // Retrieve all products for the order creation form
        $products = Product::all();

        // Pass the orders and products to the view
        return view('orders.index', compact('orders', 'products'));
    }

    // Store a new order in the database
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Find the product based on the product_id
        $product = Product::findOrFail($request->product_id);

        // Calculate the total price of the order
        $totalPrice = $product->price * $request->quantity;

        // Create a new order with the provided details
        Order::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
            'status' => 'pending', // Set the default status to 'pending'
        ]);

        // Redirect to the order management page with a success message
        return redirect()->route('order.management')->with('success', 'Order added successfully.');
    }

    // Update the status of an existing order
    public function update($id)
    {
        // Find the order by ID
        $order = Order::findOrFail($id);

        // Update the order status (e.g., mark as delivered)
        $order->status = 'delivered'; // Example status update

        // Save the changes to the database
        $order->save();

        // Redirect to the order management page with a success message
        return redirect()->route('order.management')->with('success', 'Order status updated.');
    }
}
