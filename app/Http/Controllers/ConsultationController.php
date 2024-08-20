<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function bookConsultation(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'date' => 'required|date',
            'message' => 'required|string|max:1000',
        ]);

        // Here you can process the data, like saving it to the database
        // or sending an email notification, etc.

        // For now, let's just return a simple confirmation message
        return back()->with('success', 'Your consultation has been booked successfully!');
    }
}
