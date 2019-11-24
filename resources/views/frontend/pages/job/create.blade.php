@extends('backend.layouts.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="card">
                <div class="card-header">
                    Add Product
                </div>
                <div class="card-body">
                    <form action="{{route('job.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('backend.partials.messages')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="title" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Salary</label>
                            <input type="number" class="form-control" name="price" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Experience</label>
                            <input type="number" class="form-control" name="quantity" id="exampleInputEmail1" >
                        </div>
                        <button type="submit" class="btn btn-primary">Add job</button>
                    </form>

                </div>
            </div>

    </div>
    </div>
    <!-- main-panel ends -->
@endsection
