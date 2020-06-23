<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;

class JobController extends Controller
{
    public function index() {
       $jobs = Jobs::all();

       return view('welcome', compact('jobs'));
    }
}
