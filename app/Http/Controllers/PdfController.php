<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePdf(Request $request)
    {
        // Data you want to pass to the view (if needed)
        $data = [];
    
        // Render the Blade view to HTML
        $htmlContent = view('cv/index', $data)->render();
    
        // Use a regular expression to extract the content within the 'template_card_for_pdf_print' section
        $pattern = '/<div class="template_card_for_pdf_print">(.*?)<\/div>/s';
        preg_match($pattern, $htmlContent, $matches);
        $extractedHtml = $matches[0] ?? '';
    
        // Create an instance of the Dompdf class
        $pdf = PDF::loadHTML($extractedHtml);
    
        // Generate the PDF and return it for download
        return $pdf->download('resume.pdf');
    }
    
    
}
