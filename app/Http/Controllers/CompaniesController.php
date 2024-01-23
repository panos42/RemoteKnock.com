<?php

// app/Http/Controllers/CompaniesController.php

namespace App\Http\Controllers;

use App\Models\Company;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Company::all(); // Retrieve all companies, you might want to paginate based on your needs

        return view('companies', compact('companies'));
    }
}
