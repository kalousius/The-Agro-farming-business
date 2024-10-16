<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show all products
    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('product.index', compact('products'));
    }

    // Show form to create a new product
    public function create()
    {
        return view('product.create');
    }

    // Store a new product
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        Product::create($request->all());

        return redirect()->route('product.index')->with('success', 'Product added successfully.');
    }

    // Show details of a single product
    public function show($id)
    {
        // Find the product by its ID
        $product = Product::findOrFail($id);

        // Pass the product to the correct view
        return view('product.show', compact('product')); // Update to 'product.show'
    }
}
