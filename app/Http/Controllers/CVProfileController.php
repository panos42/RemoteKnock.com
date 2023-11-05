<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CvProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        // $cvProfile = CvProfile::where('user_id', $user->id)->first();
    
        return view('cv.index');
    }




public function getTemplate($templateName) {
    // Construct the full view name based on the templateName
    $viewName = "cv_templates.$templateName";

    if (View::exists($viewName)) {
        return view($viewName); // Render and return the view
    } else {
        // Handle the case where the template does not exist
        abort(404, 'Template not found');
    }
}


// public function generatePdf(Request $request)
// {
//     $htmlContent = $request->input('htmlContent');

//     $pdf = new PDF(); // Create an instance of the PDF class

//     $pdf->loadHTML($htmlContent); // Load HTML content into the PDF instance

//     return $pdf->download('document.pdf');
// }


public function checkout(){


    $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));

    $checkout_session = $stripe->checkout->sessions->create
([
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'product_data' => [
        'name' => 'T-shirt',
      ],
      'unit_amount' => 2000,
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => 'http://localhost:4242/success',
  'cancel_url' => 'http://localhost:4242/cancel',
]);


    return redirect($checkout_session->url);
}

    
}
