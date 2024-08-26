<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function mobileAppIntegration()
    {
        return view('features.mobile-app-integration');
    }

    public function digitalMarketplace()
    {
        return view('features.digital-marketplace');
    }

    public function farmManagementTools()
    {
        return view('features.farm-management-tools');
    }

    public function educationalResourcesTraining()
    {
        return view('features.educational-resources-training');
    }

    public function weatherForecastAdvisory()
    {
        return view('features.weather-forecast-advisory');
    }

    public function cropDiseaseDiagnosis()
    {
        return view('features.crop-disease-diagnosis');
    }

    public function communityNetworkingCollaboration()
    {
        return view('features.community-networking-collaboration');
    }

    public function financialServicesAccess()
    {
        return view('features.financial-services-access');
    }
}
