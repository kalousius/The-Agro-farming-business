<!-- resources/views/educational-resources-training.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Educational Resources and Training</h1>

        <!-- E-Learning Platform Section -->
        <div class="e-learning-platform">
            <h2>E-Learning Platform</h2>
            <p>Access training materials, video tutorials, and guides on best farming practices, pest management, soil health, and sustainable farming techniques.</p>

            <!-- Video Tutorials -->
            <div class="video-tutorials">
                <h3>Video Tutorials</h3>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/example_video_id" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/example_video_id2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <!-- Downloadable Resources -->
            <div class="downloadable-content">
                <h3>Downloadable Resources</h3>
                <ul>
                    <li><a href="{{ asset('documents/farming_practices.pdf') }}" download>Best Farming Practices Guide (PDF)</a></li>
                    <li><a href="{{ asset('documents/soil_health.pdf') }}" download>Soil Health and Management (PDF)</a></li>
                    <li><a href="{{ asset('documents/pest_management.pdf') }}" download>Pest Management Techniques (PDF)</a></li>
                </ul>
            </div>

            <!-- External Resources -->
            <div class="external-resources">
                <h3>External Resources</h3>
                <ul>
                    <li><a href="https://www.example.com/farming-course" target="_blank">Online Course on Sustainable Farming</a></li>
                    <li><a href="https://www.example.com/soil-health" target="_blank">Soil Health Information Hub</a></li>
                    <li><a href="https://www.example.com/pest-management" target="_blank">Pest Management Best Practices</a></li>
                </ul>
            </div>
        </div>

        <!-- Expert Consultation Section -->
        <!-- Expert Consultation Section -->
     <div class="expert-consultation">
    <h2>Expert Consultation</h2>
    <p>Get virtual consultations with agricultural experts. Ask questions and receive advice tailored to your specific needs.</p>
    
    <!-- Consultation Booking Form -->
    <form method="POST" action="{{ route('book.consultation') }}">
        @csrf <!-- CSRF token for security -->
        
        <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>
        
        <div class="form-group">
            <label for="date">Preferred Consultation Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
        
        <div class="form-group">
            <label for="message">Your Message or Question:</label>
            <textarea id="message" name="message" rows="5" placeholder="Describe your issue or ask your question here" required></textarea>
        </div>
        
        <div class="form-group">
            <button type="submit">Book Consultation</button>
        </div>
    </form>
</div>  
<style>
    .expert-consultation {
        background-color: #f9f9f9;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-top: 2rem;
    }

    .expert-consultation h2 {
        color: #333;
        margin-bottom: 1rem;
        font-size: 1.75rem;
    }

    .expert-consultation p {
        color: #555;
        margin-bottom: 1.5rem;
        font-size: 1rem;
        line-height: 1.6;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: bold;
        color: #333;
    }

    .form-group input, .form-group textarea {
        width: 100%;
        padding: 0.75rem;
        font-size: 1rem;
        border-radius: 4px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .form-group textarea {
        resize: vertical;
    }

    .form-group button {
        background-color: #28a745;
        color: white;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .form-group button:hover {
        background-color: #218838;
    }

    /* Additional responsive design */
    @media (max-width: 768px) {
        .expert-consultation {
            padding: 1.5rem;
        }

        .form-group label {
            font-size: 0.9rem;
        }

        .form-group input, .form-group textarea {
            padding: 0.5rem;
            font-size: 0.9rem;
        }

        .form-group button {
            padding: 0.65rem 1.25rem;
            font-size: 0.9rem;
        }
    }
</style> 
    </div>
@endsection
