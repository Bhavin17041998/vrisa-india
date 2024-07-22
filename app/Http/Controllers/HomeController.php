<?php

namespace App\Http\Controllers;

use App\Mail\Enquiry;
use App\Models\Enquiry as ModelsEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function formSubmit(Request $request){

        ModelsEnquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'service_type' => $request->serviceType
        ]);
        Mail::to('vrisaindia@gmail.com')->send(new Enquiry($request->email, $request->name, $request->serviceType, $request->message));
        return response()->json(['message' => 'Thank you for reaching us Our Customer Executive will Contact you Soon!'], 200);
    }
}
