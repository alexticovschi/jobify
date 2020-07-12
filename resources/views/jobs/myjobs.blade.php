@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <table class="table">
										<thead>
												<th></th>
												<th>Position</th>
												<th>Address</th>
												<th>Date</th>
												<th></th>
										</thead>
										<tbody>
												@foreach($jobs as $job)
														<tr>
																<td>
																	
																
																@if(empty(Auth::user()->company->logo))
																	<img src="{{asset('avatar/man.jpg')}}" width="80" alt="">
																@else
																	<img src="/uploads/logo/{{Auth::user()->company->logo}}" style="width: 50%; max-height: 120px">
																@endif
																</td>
																<td>{{$job->position}}
																		<br>
																		<i class="fa fa-clock-o"></i> {{$job->type}}
																</td>
																<td><i class="fa fa-map-marker"></i> {{$job->address}}</td>
																<td><i class="fa fa-globe"></i><br>{{$job->last_date}}</td>
																<td>
																		<a href="/jobs/{{$job->id}}/{{$job->slug}}">
																				<button class="btn btn-success btn-sm">Apply</button>
																		</a>
																		<a href="{{route('job.edit', [$job->id])}}" class="btn btn-dark">Edit</a>
																</td>
														</tr> 
												@endforeach
										</tbody>
								</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
