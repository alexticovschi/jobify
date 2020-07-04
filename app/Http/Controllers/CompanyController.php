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

    public function coverPhoto(Request $request) {
        $user_id = auth()->user()->id;

        if ($request->hasfile('cover_photo')) {
            $file = $request->file('cover_photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/coverphoto/', $filename);
        }
        
        // save file into companies table
        Company::where('user_id', $user_id)->update([
            'cover_photo' => $filename
        ]);

        return redirect()->back()->with('message', 'Cover Photo Updated!');
    }
}
