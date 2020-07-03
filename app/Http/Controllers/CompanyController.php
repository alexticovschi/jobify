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

    public function store() {
        $user_id = auth()->user()->id;

        Company::where('user_id', $user_id)->update([
            'address' => request('address'),
            'phone' => request('phone'),
            'website' => request('website'),
            'slogan' => request('slogan'),
            'description' => request('description')
        ]);

        return redirect()->back()->with('message', 'Company Profile Updated!');
    }
}
