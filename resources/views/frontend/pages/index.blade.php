@include('frontend.partials.styles')
@extends('frontend.layouts.master')

@section('content')

  <!-- Start Sidebar + Content -->
  <div class='container margin-top-20'>
    <div class="row">
      <div class="col-md-4">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">Govt. Jobs</a>
          <a href="#" class="list-group-item list-group-item-action">IT & Software</a>
          <a href="#" class="list-group-item list-group-item-action">Business</a>
        </div>
      </div>

      <div class="col-md-8">
        <div class="widget">
          <h3>All Jobs</h3>

          {{--getting jobs from database--}}
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
