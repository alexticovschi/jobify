<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    public function index() {
       $jobs = Job::all();

       return view('welcome', compact('jobs'));
    }

    public function show($id, $job) {
        $job = Job::find($id);
        return view('jobs.show', compact('job'));
    }

    public function create() {
        return view('jobs.create');
    }

}
