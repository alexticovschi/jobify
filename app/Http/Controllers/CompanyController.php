<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware(['employer', 'verified'], ['except' => array('index')]);
    }

    public function index($id, Company $company)
    {
        $company = Company::where('user_id', $id)->get();
        $company = $company[0];
        // dd($company);

        return view('company.index', compact('company'));
    }

    public function create()
    {
        return view('company.create');
    }

    public function store()
    {
        $user_id = auth()->user()->id;

        Company::where('user_id', $user_id)->update([
            'address' => request('address'),
            'phone' => request('phone'),
            'website' => request('website'),
            'slogan' => request('slogan'),
            'description' => request('description'),
        ]);

        return redirect()->back()->with('message', 'Company Profile Updated!');
    }

    public function coverPhoto(Request $request)
    {
        $user_id = auth()->user()->id;

        if ($request->hasfile('cover_photo')) {
            $file = $request->file('cover_photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/coverphoto/', $filename);
        }

        // save file into companies table
        Company::where('user_id', $user_id)->update([
            'cover_photo' => $filename,
        ]);

        return redirect()->back()->with('message', 'Cover Photo Updated!');
    }

    public function companyLogo(Request $request)
    {
        $user_id = auth()->user()->id;

        if ($request->hasfile('logo')) {
            $file = $request->file('logo');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/logo/', $filename);
        }

        // save file into companies table
        Company::where('user_id', $user_id)->update([
            'logo' => $filename,
        ]);

        return redirect()->back()->with('message', 'Logo Updated!');
    }
}