@extends('backend.layouts.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="card">
                <div class="card">
                    <div class="card-header">
                        Apply Job
                    </div>
                    <div class="card-body">
                        <form action="#" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('backend.partials.messages')
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="exampleInputEmail1" value="{{$user->first_name}}" >
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
