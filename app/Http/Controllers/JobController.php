<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Job;

class JobController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth:admin');
    }
    public function index()
    {
        $jobs = Job::orderBy('id','desc')->get();
        return view('backend.pages.job.index')->with('jobs',$jobs);
    }

    public function create()
    {
        return view('backend.pages.job.create');
    }
    public function edit($id)
    {
        $job = Job::find($id);
        return view('backend.pages.job.edit')->with('job',$job);
    }
    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required|max:150',
            'description' => 'required',
            'salary' => 'required|numeric',
            'location' => 'required',
            'country' => 'required',
            'experience' => 'required',
        ]);


        $job = new Job;
        $job->title = $request->title;
        $job->description = $request->description;
        $job->salary = $request->salary;
        $job->location = $request->location;
        $job->country = $request->country;

        $job->slug= Str::slug($request->title);
        $job->experience= $request->experience;

        $job->save();



        return redirect()->route('company.index');
    }

    public function update(Request $request, $id)
    {


        $request->validate([
            'title' => 'required|max:150',
            'description' => 'required',
            'salary' => 'required|numeric',
            'experience' => 'required',
            'location' => 'required',
            'country' => 'required',
        ]);


        $job = Job::find($id);
        $job->title = $request->title;
        $job->description = $request->description;
        $job->salary = $request->salary;
        $job->experience= $request->experience;
        $job->location = $request->location;
        $job->country = $request->country;

        $job->slug= Str::slug($request->title);

        $job->save();

        return redirect()->route('company.index');
    }

    public function delete($id){
        $job = Job::find($id);
        if(!is_null($job)){
            $job->delete();
        }
        session()->flash('success','Job has been deleted successfully!');
        return back();
    }
}
