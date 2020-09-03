<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['seeker', 'verified']);
    }

    public function index()
    {
        return view('profile.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'address' => 'required',
            'phone_number' => 'required|min:10|numeric',
            'experience' => 'required|min:20',
            'bio' => 'required|min:20',
        ]);

        $user_id = auth()->user()->id;

        Profile::where('user_id', $user_id)->update([
            'address' => request('address'),
            'phone_number' => request('phone_number'),
            'experience' => request('experience'),
            'bio' => request('bio'),
        ]);

        return redirect()->back()->with('message', 'Profile Updated!');
    }

    public function coverletter(Request $request)
    {
        $this->validate($request, [
            'cover_letter' => 'required|mimes:pdf,doc,docx|max:20000',
        ]);

        $user_id = auth()->user()->id;
        $cover = $request->file('cover_letter')->store('public/files');

        Profile::where('user_id', $user_id)->update([
            'cover_letter' => $cover,
        ]);

        return redirect()->back()->with('message', 'Cover Letter Updated!');
    }

    public function resume(Request $request)
    {
        $this->validate($request, [
            'resume' => 'required|mimes:pdf,doc,docx|max:20000',
        ]);

        $user_id = auth()->user()->id;
        $resume = $request->file('resume')->store('public/files');

        Profile::where('user_id', $user_id)->update([
            'resume' => $resume,
        ]);

        return redirect()->back()->with('message', 'Resume Updated!');
    }

    public function avatar(Request $request)
    {
        $this->validate($request, [
            'avatar' => 'required|mimes:png,jpg,jpeg|max:20000',
        ]);

        $user_id = auth()->user()->id;

        if ($request->hasfile('avatar')) {
            $file = $request->file('avatar');

            /* get file extension */
            $ext = $file->getClientOriginalExtension();

            $filename = time() . '.' . $ext;

            /* move file to public directory */
            $file->move('uploads/avatar/', $filename);
        }

        Profile::where('user_id', $user_id)->update([
            'avatar' => $filename,
        ]);

        return redirect()->back()->with('message', 'Profile Picture Updated!');
    }

}