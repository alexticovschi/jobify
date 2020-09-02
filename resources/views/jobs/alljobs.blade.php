@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="GET" class="form-row align-items-center mb-3">
            <div class="col my-1">
                <input type="text" name="title" class="form-control" placeholder="Keyword">
            </div>
            <div class="col my-1">
                <select class="custom-select mr-sm-2" name="type">
                    <option selected>Employment type</option>
                    <option value="fulltime">Fulltime</option>
                    <option value="parttime">Part Time</option>
                    <option value="3">Contract</option>
                </select>
            </div>
            <div class="col my-1">
                <select class="custom-select mr-sm-2" name="category_id">
                    <option selected>Category</option>

                    @foreach(\App\Category::all() as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col my-1">
                <input type="text" name="address" class="form-control" placeholder="Address">
            </div>
  
            <div class="col-auto my-1">
                <button type="submit" class="btn btn-outline-success">Search</button>
            </div>
        </form>

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

        {{$jobs->withQueryString()->links()}}
    </div>
</div>
@endsection