<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('digital-marketplace', compact('products'));
    }
}
