<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientLogo;
use App\Models\GeneralSetting;
use App\Models\Plan;
use App\Models\Product;
use App\Models\Project;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        $clientLogo = ClientLogo::all();
        $plans = Plan::where('status', 1)->get();
        $clientReviews = Client::where('status', 1)->get();
        $products = Product::where('product_type', 'Most Popular')->get();
        $general_settings = GeneralSetting::first();
        return view('index', compact('sliders', 'clientLogo', 'plans', 'clientReviews', 'products', 'general_settings'));
    }
    public function projects(){
        $projects = Project::all();
        $general_settings = GeneralSetting::first();
        return view('projects', compact('projects', 'general_settings'));
    }

    public function contactUs(){
        $clientLogo = ClientLogo::all();
        $general_settings = GeneralSetting::first();
        return view('contact', compact('clientLogo', 'general_settings'));
    }

    public function aboutUs(){
        $clientLogo = ClientLogo::all();
        $general_settings = GeneralSetting::first();
        return view('about_us', compact('clientLogo', 'general_settings'));
    }

    public function services(){
        $clientLogo = ClientLogo::all();
        $clientReviews = Client::where('status', 1)->get();
        $general_settings = GeneralSetting::first();
        return view('service', compact('clientLogo', 'clientReviews', 'general_settings'));
    }
}
