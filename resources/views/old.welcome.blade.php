@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Recent Jobs</h1>
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
                        <td><img src="{{asset('avatar/man.jpg')}}" width="80" alt=""></td>
                        <td>{{$job->position}}
                            <br>
                            <i class="fa fa-clock-o"></i> {{$job->type}}
                        </td>
                        <td><i class="fa fa-map-marker"></i> {{$job->address}}</td>
                        <td><i class="fa fa-globe"></i><br>{{$job->last_date}}</td>
                        <td>
                            @if(Auth::check() && Auth::user()->user_type == 'seeker')
                                @if($job->checkApplication())
                                    <a href="/jobs/{{$job->id}}/{{$job->slug}}">
                                        <button class="btn btn-info btn-sm">Applied</button>
                                    </a>
                                @else
                                    <a href="/jobs/{{$job->id}}/{{$job->slug}}">
                                        <button class="btn btn-success btn-sm">Apply</button>
                                    </a>
                                @endif
                            @endif
                        </td>
                    </tr> 
                @endforeach
            </tbody>
        </table>
    </div>

    <div>
        <a href="{{route('jobs.alljobs')}}">
            <button class="btn btn-success btn-lg btn-block">Browse All Jobs</button>
        </a>
    </div>

    <br>
    <h1 class="mt-5">Featured Companies</h1>

    <div class="container mt-4">
        <div class="row">
            @foreach($companies as $company)
            <div class="col-md-3 mb-3">
                <div class="card">
                <img class="card-img-top" src="{{asset('uploads/logo')}}/{{$company->logo}}" height="150" alt="Card image cap" style="object-fit: cover">
                <div class="card-body">
                    <h5 class="card-title">{{$company->cname}}</h5>
                    <p class="card-text">{{str_limit($company->description,25)}}</p>
                    <a href="{{route('company.index', [$company->user_id, $company->slug])}}" class="btn btn-primary">Visit Company</a>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection