<style>
    .inner{
        overflow: hidden;
    }
    .inner img{
        transition: all 1.5s ease;
    }
    .inner:hover img{
        transform: scale(1.5);
    }
    .card{
        alignment: center;
    }
    .con .fa{
        color: #272e35;
    }
    .card-text{
        color: rgb(26, 26, 26) !important;
        font-family: Arial,sans-serif;;
    }
</style>
<div class="row">
        @foreach($jobs as $job)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <a href="#" target="_blank"><h4 class="card-title">
                                {{$job->title}}
                            </h4></a>

                        <p class="card-text">Experience : {{$job->experience}} </p>
                        <p class="card-text">salary : {{$job->salary}}</p>
                        @include('frontend.pages.job.partials.apply-button')
                    </div>
                </div>
            </div>
        @endforeach
    </div>