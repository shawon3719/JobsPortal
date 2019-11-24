<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyPagesController extends Controller
{
    public function index()
    {
        return view('company.pages.index');
    }
    public function jobs(){

        return view('backend.pages.job.index');
    }
}
