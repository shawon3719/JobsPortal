@extends('backend.layouts.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="card">
                <div class="card-header">
                    Edit Job
                </div>
                <div class="card-body">
                    <form action="{{route('job.update', $job->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('backend.partials.messages')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="title" id="exampleInputEmail1" value="{{$job->title}}" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea name="description" value="{{$job->description}}" rows="8" cols="80" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Salary</label>
                            <input type="number" class="form-control" name="salary" id="exampleInputEmail1" value="{{$job->salary}}" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Experience</label>
                            <input type="text" class="form-control" name="experience" id="exampleInputEmail1" value="{{$job->experience}}" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Location</label>
                            <input type="text" class="form-control" name="location" id="exampleInputEmail1" value="{{$job->location}}" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Country</label>
                            <input type="text" class="form-control" name="country" id="exampleInputEmail1" value="{{$job->country}}" >
                        </div>

                        <button type="submit" class="btn btn-primary">Update Job</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
    <!-- main-panel ends -->
@endsection
