<style>
    .form-inline button{
        background: #149635;
        border-color: #149635 #14732e #0e5e24;
    }
</style>

<form class="form-inline" action="{{route('apply.store')}}" method="post">
    @csrf
    <input type="hidden" name="job_id" value="{{ $job->id }}">
    <button type="submit" class="btn btn-warning" onclick="{{route('apply.store')}}">Apply Now</button>
</form>