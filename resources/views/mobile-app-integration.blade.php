<!-- resources/views/features/mobile-app-integration.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Mobile App Integration</h1>
        <p>This section provides information about integrating mobile applications with your farming business to enhance productivity and convenience. Our mobile app offers various features like remote farm monitoring, order management, weather updates, and access to expert consultation, all from the palm of your hand.</p>

        <h3>Key Features of the Mobile App:</h3>
        <ul>
            <li>Remote Farm Monitoring</li>
            <li>Order Management</li>
            <li>Weather Updates and Advisory</li>
            <li>Expert Consultation Services</li>
            <li>Community Collaboration Tools</li>
        </ul>

        <p>With our app, you can ensure that your farm operations run smoothly, even when you are on the move. Stay connected to your business from anywhere at any time!</p>
        
        <a href="{{ route('digital.marketplace') }}" class="btn btn-primary">Explore Our Digital Marketplace</a>
    </div>
@endsection

@section('styles')
    <style>
        .container {
            margin-top: 50px;
        }
        ul {
            list-style-type: square;
            margin-left: 20px;
        }
        .btn {
            margin-top: 20px;
        }
    </style>
@endsection
