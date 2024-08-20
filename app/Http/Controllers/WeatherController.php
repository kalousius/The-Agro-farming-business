<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Carbon\Carbon; // Add this line to use Carbon for date and time handling

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        $location = $request->input('location');

        // Your valid API key
        $apiKey = '09e44a6eaee52abb78bd6f94b86e0f5b';

        // Create a Guzzle client
        $client = new Client();

        try {
            // Send a GET request to the OpenWeatherMap API
            $response = $client->get('https://api.openweathermap.org/data/2.5/weather', [
                'query' => [
                    'q' => $location,
                    'appid' => $apiKey,
                    'units' => 'metric'
                ]
            ]);

            // Decode the JSON response
            $weatherData = json_decode($response->getBody(), true);

            // Get the current date and time
            $currentDateTime = Carbon::now()->format('F j, Y, g:i A'); // Example: August 9, 2024, 3:45 PM

            // Determine if it's rainy, sunny, etc., based on the weather conditions
            $weatherCondition = ucfirst($weatherData['weather'][0]['main']);

            return view('weather-forecast-advisory', [
                'location' => $location,
                'currentDateTime' => $currentDateTime, // Pass the current date and time to the view
                'weatherData' => [
                    'temperature' => $weatherData['main']['temp'],
                    'conditions' => $weatherData['weather'][0]['description'],
                    'condition_main' => $weatherCondition, // Pass the main condition (e.g., Rainy, Sunny)
                    'humidity' => $weatherData['main']['humidity'],
                    'wind_speed' => $weatherData['wind']['speed']
                ]
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['msg' => 'Failed to retrieve weather data.']);
        }
    }
}
