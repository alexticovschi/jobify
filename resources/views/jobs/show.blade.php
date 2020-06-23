@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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

									<button class="btn btn-success">Apply</button>
                </div>
            </div>
        </div>
				<div class="col-md-4">
            <div class="card">
                <div class="card-header">Short Info</div>

                <div class="card-body">
									<p>Company: {{$job->company->cname}}</p>
									<p>Address: {{$job->address}}</p>
									<p>Employment Type: {{$job->type}}</p>
									<p>Position: {{$job->position}}</p>
									<p>Date: {{$job->last_date}}</p>
                </div>
					  </div>
        </div>
    </div>
</div>
@endsection