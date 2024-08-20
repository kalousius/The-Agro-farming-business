<!-- resources/views/crop-disease-diagnosis.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crop Disease Diagnosis and Management</h1>

        <!-- AI-Powered Diagnosis Section -->
        <div class="ai-powered-diagnosis">
            <h2>AI-Powered Diagnosis</h2>
            <p>Take a picture of your crop to get an instant diagnosis and treatment suggestions for diseases and pests.</p>
            <form method="POST" action="{{ route('upload.diagnosis') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="crop-image">Upload Crop Image:</label>
                    <input type="file" id="crop-image" name="crop_image" required>
                </div>
                <div class="form-group">
                    <button type="submit">Get Diagnosis</button>
                </div>
            </form>
        </div>

        <!-- Preventive Measures Database Section -->
        <div class="preventive-measures-database">
            <h2>Preventive Measures Database</h2>
            <p>Explore best practices and preventive measures to reduce the risk of disease and pest infestations.</p>
            <ul>
                <li><a href="{{ asset('documents/preventive_measures.pdf') }}" download>Download Preventive Measures Guide (PDF)</a></li>
                <li><a href="https://www.example.com/preventive-practices" target="_blank">Visit Online Database of Best Practices</a></li>
                <li><a href="{{ asset('documents/pest_management_tips.pdf') }}" download>Pest Management Tips (PDF)</a></li>
            </ul>
        </div>
    </div>
@endsection
