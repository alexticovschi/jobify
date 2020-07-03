<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function index($id, $name) {
        $company = Company::find($id);
        // dd($company);

        return view('company.index', compact('company'));
    }

    public function create() {
        return view('company.create');
    }

    public function store() {}
}
