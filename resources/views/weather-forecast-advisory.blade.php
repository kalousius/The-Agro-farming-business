@extends('layouts.app')

@section('content')
   <div class="container">
        <h1>Weather Forecast and Advisory System</h1>
        <p>Get accurate, localized weather forecasts and farming advisories.</p>

        <!-- Form to submit the location -->
        <form method="POST" action="{{ route('get.weather') }}">
            @csrf <!-- Include CSRF token for security -->
            <div class="form-group">
                <label for="location">Enter Your Location:</label>
                <input type="text" id="location" name="location" placeholder="Enter city or district" required>
            </div>
            <div class="form-group">
                <button type="submit">Get Weather Forecast</button>
            </div>
        </form>

        <!-- Weather results section -->
        @if(isset($weatherData))
        <div class="weather-results">
            <h2>Weather Forecast for {{ $location }}</h2>
            <p>Date and Time: {{ $currentDateTime }}</p> <!-- Display the current date and time -->
            <p>Temperature: {{ $weatherData['temperature'] }}°C</p>
            <p>Conditions: {{ ucfirst($weatherData['conditions']) }}</p>
            <p>Weather: {{ $weatherData['condition_main'] }}</p> <!-- Display the main weather condition -->
            <p>Humidity: {{ $weatherData['humidity'] }}%</p>
            <p>Wind Speed: {{ $weatherData['wind_speed'] }} km/h</p>
        </div>
        @endif

        <!-- Advisory Section -->
        <div class="advisory-section">
            <h2>Climate Change Adaptation Tips</h2>
            <ul>
                <li>Adopt drought-resistant crop varieties to minimize water usage.</li>
                <li>Implement crop rotation and diversification to maintain soil fertility.</li>
                <li>Use mulching techniques to retain soil moisture and reduce the need for irrigation.</li>
                <li>Plan planting schedules based on seasonal weather patterns to maximize yield.</li>
                <li>Install rainwater harvesting systems to capture and store rainwater for use during dry periods.</li>
                <li>Monitor and manage pests and diseases, which may become more prevalent due to climate change.</li>
                <li>Utilize renewable energy sources like solar power for irrigation and other farm operations.</li>
            </ul>
        </div>
    </div>
 
@endsection

<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f8f9fa;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 90%;
        max-width: 1000px;
        margin: 2rem auto;
        padding: 2rem;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        color: #2c3e50;
        text-align: center;
        letter-spacing: 1px;
    }

    .form-group {
        margin-bottom: 2rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .form-group input {
        width: 100%;
        padding: 0.75rem;
        font-size: 1.2rem;
        border-radius: 5px;
        border: 1px solid #ccc;
        transition: border-color 0.3s ease;
    }

    .form-group input:focus {
        border-color: #007bff;
    }

    .form-group button {
        display: inline-block;
        background-color: #007bff;
        color: #fff;
        padding: 0.75rem 2rem;
        font-size: 1.2rem;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-group button:hover {
        background-color: #0056b3;
    }

    .weather-results {
        margin-top: 2rem;
        padding: 1.5rem;
        background-color: #e9ecef;
        border-radius: 8px;
        line-height: 1.8;
    }

    .weather-results h2 {
        font-size: 1.8rem;
        color: #2c3e50;
        margin-bottom: 1rem;
    }

    .weather-results p {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }

    .advisory-section {
        margin-top: 3rem;
        padding: 1.5rem;
        background-color: #f8f9fa;
        border-radius: 8px;
    }

    .advisory-section h2 {
        font-size: 1.8rem;
        color: #2c3e50;
        margin-bottom: 1rem;
        text-decoration: underline;
    }

    .advisory-section ul {
        list-style-type: square;
        padding-left: 20px;
    }

    .advisory-section ul li {
        font-size: 1.1rem;
        margin-bottom: 0.75rem;
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 2rem;
        }

        .form-group input, .form-group button {
            font-size: 1rem;
        }

        .weather-results h2, .advisory-section h2 {
            font-size: 1.5rem;
        }

        .weather-results p, .advisory-section ul li {
            font-size: 1rem;
        }
    }
</style>
