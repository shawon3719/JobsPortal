
@extends('layouts.master')

@section('content')

    <!-- Start Sidebar + Content -->
    <div class='container margin-top-20'>
        <div class="row">
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">First item</a>
                    <a href="#" class="list-group-item list-group-item-action">Second item</a>
                    <a href="#" class="list-group-item list-group-item-action">Third item</a>
                </div>
            </div>

            <div class="col-md-8">
                <div class="widget">
                    <h3>All Jobs</h3>

{{--                    getting jobs from database--}}
                    <div class="row">
                        @foreach($jobs as $job)
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            {{$job->title}}
                                        </h4>
                                        <p class="card-text">Experience : {{$job->experience}} </p>
                                        <p class="card-text">salary : {{$job->salary}}</p>
                                        <a href="#" class="btn btn-outline-warning">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
                <div class="widget">

                </div>
            </div>


        </div>
    </div>
    <div class="clearfix"></div>

    <!-- End Sidebar + Content -->
@endsection
