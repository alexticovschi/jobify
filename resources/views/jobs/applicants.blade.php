@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              @foreach($applicants as $applicant)
                <div class="card-header">
                <a href="{{route('jobs.show', [$applicant->id, $applicant->slug])}}">{{$applicant->title}}</a>
                </div>

                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Bio</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Experience</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($applicant->users as $user) 
                      <tr>
                        <th scope="row"></th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->profile->address}}</td>
                        <td>{{$user->profile->bio}}</td>
                        <td>{{$user->profile->gender}}</td>
                        <td>{{$user->profile->experience}}</td>
                        <td><a href="{{Storage::url($user->profile->resume)}}">Resume</a></td>
                        <td><a href="{{Storage::url($user->profile->cover_letter)}}">Cover Letter</a></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
