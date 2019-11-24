
@extends('layouts.master')

@section('content')

  <!-- Start Sidebar + Content -->
  <div class='container margin-top-20'>
    <div class="row">
      <div class="col-md-4">
        @include('partials.job-sidebar)
      </div>

      <div class="col-md-8">
        <div class="widget">
          <h3>Featured Jobs</h3>
          <div class="row">

            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Samsung</h4>
                  <p class="card-text">Experience : </p>
                  <a href="#" class="btn btn-outline-warning">Apply Now</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Samsung</h4>
                  <p class="card-text">Experience : </p>
                  <a href="#" class="btn btn-outline-warning">Apply Now</a>
                </div>
              </div>
            </div><div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Samsung</h4>
                  <p class="card-text">Experience : </p>
                  <a href="#" class="btn btn-outline-warning">Apply Now</a>
                </div>
              </div>
            </div><div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Samsung</h4>
                  <p class="card-text">Experience : </p>
                  <a href="#" class="btn btn-outline-warning">Apply Now</a>
                </div>
              </div>
            </div><div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Samsung</h4>
                  <p class="card-text">Experience : </p>
                  <a href="#" class="btn btn-outline-warning">Apply Now</a>
                </div>
              </div>
            </div>




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
