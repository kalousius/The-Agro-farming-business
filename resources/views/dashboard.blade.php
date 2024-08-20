<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Agro Farming Business</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Add your CSS file if you have one -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            height: 100vh;
            position: sticky;
            top: 0;
        }

        .sidebar h2 {
            font-size: 1.5rem;
            margin: 0 0 1rem;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 0.5rem 0;
            padding: 0.5rem;
            border-radius: 4px;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .main-content {
            flex: 1;
            padding: 2rem;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 2rem;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .card {
            background: #ffffff;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
        }

        .card-header {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .card-content {
            font-size: 1rem;
            color: #666;
        }

        .logout {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            font-size: 1rem;
            cursor: pointer;
            text-align: center;
        }

        .logout:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('profile.edit') }}">Profile</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    <!-- New Menus -->
    <h3>Features</h3>
    <a href="{{ route('mobile.app.integration') }}">Mobile App Integration</a>
    <a href="{{ route('digital.marketplace') }}">Digital Marketplace for Farm Produce</a>
    <a href="{{ route('farm.management.tools') }}">Farm Management Tools</a>
    <a href="{{ route('educational.resources.training') }}">Educational Resources and Training</a>
    <a href="{{ route('weather.forecast.advisory') }}">Weather Forecast and Advisory System</a>
    <a href="{{ route('crop.disease.diagnosis') }}">Crop Disease Diagnosis and Management</a>
    <a href="{{ route('community.networking.collaboration') }}">Community Networking and Collaboration</a>
    <a href="{{ route('financial.services.access') }}">Access to Financial Services</a>
</div>

    <div class="main-content">
        <div class="container">
            <h1>Welcome to Agro Farming Business Dashboard</h1>

            <!-- User Info -->
            <div class="card">
                <div class="card-header">User Information</div>
                <div class="card-content">
                    <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="card">
                <div class="card-header">Additional Information</div>
                <div class="card-content">
                    <p>Here you can add more content relevant to the user's dashboard.</p>
                </div>
            </div>

            <!-- Logout Form -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</body>
</html>
