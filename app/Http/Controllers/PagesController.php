<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class PagesController extends Controller
{
    public function index()
    {
        $jobs = Job::orderBy('id','desc')->get();
      return view('frontend.pages.index')->with('jobs', $jobs);
    }

    public function contact()
    {
      return view('pages.contact');
    }
    public function jobs()
    {
        $jobs = Job::orderBy('id','desc')->get();
        return view('frontend.pages.job.index')->with('jobs', $jobs);
    }
}
