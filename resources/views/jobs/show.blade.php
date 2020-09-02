@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
					@if(Session::has('message'))
						<div class="alert alert-success my-2 text-center">
							{{Session::get('message')}}
						</div>
					@endif
            <div class="card">
                <div class="card-header">{{$job->title}}</div>

                <div class="card-body">
									<div>
										<h3>Description</h3>
										<p>{{$job->description}}</p>
									</div>
									<div>
										<h3>Duties</h3>
                   <p>{{$job->roles}}</p>
									</div>
                </div>
            </div>
        </div>
				<div class="col-md-4">
            <div class="card">
                <div class="card-header">Short Info</div>
                <div class="card-body">
									<p>Company: <a href="/company/{{$job->company->id}}/{{$job->company->slug}}">{{$job->company->cname}}</a></p>
									<p>Address: {{$job->address}}</p>
									<p>Employment Type: {{$job->type}}</p>
									<p>Position: {{$job->position}}</p>
									<p>Posted: {{$job->created_at}}</p>
									<p>Last Date to Apply: {{date('F d, y', strtotime($job->last_date))}}</p>
                </div>
					  </div>
						@if(Auth::check() && Auth::user()->user_type == 'seeker')
							@if($job->checkApplication())
								<button class="btn btn-info btn-block mt-4">Already Applied</button>
							@else
								<form action="{{route('apply', [$job->id])}}" method="POST">@csrf
									<button class="btn btn-success btn-block mt-4">Apply</button>
								</form>
							@endif
						@endif
        </div>
    </div>
</div>
@endsection