<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CropDiagnosisController extends Controller
{
    public function uploadDiagnosis(Request $request)
    {
        $request->validate([
            'crop_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Process the image and integrate AI-powered diagnosis here
        // This is where you'll add your AI integration logic

        // Example response after processing the image
        $diagnosisResult = "Possible diagnosis: Fungal infection. Recommended treatment:Apply fungicide.";
        


        return view('diagnosis-result', compact('diagnosisResult'));
    }
}
