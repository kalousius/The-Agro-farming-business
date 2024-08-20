<!-- resources/views/diagnosis-result.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Diagnosis Result</h1>
        <p>{{ $diagnosisResult }}</p>
        <a href="{{ route('crop.disease.diagnosis') }}">Back to Crop Disease Diagnosis</a>
    </div>
@endsection

@section('styles')
<style>
    .container {
        margin-top: 2rem;
    }

    h1 {
        font-size: 2rem;
        margin-bottom: 1.5rem;
        color: #333;
    }

    p {
        font-size: 1rem;
        margin-bottom: 1.5rem;
    }

    .ai-powered-diagnosis, .preventive-measures-database {
        margin-top: 2rem;
    }

    .ai-powered-diagnosis h2, .preventive-measures-database h2 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
    }

    .form-group input, .form-group button {
        width: 100%;
        padding: 0.5rem;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    .form-group button {
        background-color: #28a745;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-group button:hover {
        background-color: #218838;
    }

    ul {
        list-style-type: disc;
        padding-left: 20px;
    }

    ul li {
        margin-bottom: 0.5rem;
    }
</style>
@endsection
