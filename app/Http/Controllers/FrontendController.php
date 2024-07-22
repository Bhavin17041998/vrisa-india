<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientLogo;
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
        return view('index', compact('sliders', 'clientLogo', 'plans', 'clientReviews', 'products'));
    }
    public function projects(){
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    public function contactUs(){
        $clientLogo = ClientLogo::all();
        return view('contact', compact('clientLogo'));
    }

    public function aboutUs(){
        $clientLogo = ClientLogo::all();
        return view('about_us', compact('clientLogo'));
    }

    public function services(){
        $clientLogo = ClientLogo::all();
        $clientReviews = Client::where('status', 1)->get();
        return view('service', compact('clientLogo', 'clientReviews'));
    }
}
