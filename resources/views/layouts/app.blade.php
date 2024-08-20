<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agro Farming Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link to your CSS file -->
</head>
<body>
    <div id="app">
    <nav class="sidebar">
        <h2>Menu</h2>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('weather.forecast.advisory') }}">Weather Forecast</a>
        <a href="{{ route('mobile.app.integration') }}">Mobile App Integration</a>
        <a href="{{ route('digital.marketplace') }}">Digital Marketplace</a>
        <a href="{{ route('educational.resources.training') }}">Educational Resources</a>
        <a href="#">Order Management</a>
        <a href="{{ route('order.management') }}">Order Management</a>
        <a href="#">Products</a>
        <a href="{{ route('product.index') }}">View Products</a>
        <a href="{{ route('product.create') }}">Add New Product</a>
    </nav>
    <div class="content">
        @yield('content')
    </div>
</div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Link to your JS file -->
</body>
</html>
