@include('frontend.partials.styles')
@extends('frontend.layouts.master')

@section('content')

    <!-- Start Sidebar + Content -->
    <div class='container margin-top-20'>

            <div class="col-md-12">
                <div class="widget">
                    <h3>All Jobs</h3>

{{--                    getting jobs from database--}}
                    @include('frontend.pages.job.partials.all_jobs')
                </div>
                <div class="widget">

                </div>
            </div>


        </div>
    </div>
    <div class="clearfix"></div>

    <!-- End Sidebar + Content -->
@endsection
