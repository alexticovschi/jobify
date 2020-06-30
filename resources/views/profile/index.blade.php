@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
          <img class="rounded-circle" src="{{asset('avatar/man.jpg')}}" width="100">
        </div>

				<div class="col-md-6">
					<form action="/user/profile/create" method="POST">
						@csrf
						<div class="card">
							<div class="card-header">Update Your Profile</div>
							<div class="card-body">
								<div class="form-group">
									<label for="">Address</label>
									<input type="text" class="form-control" name="address">
								</div>

								<div class="form-group">
									<label for="">Experience</label>
									<textarea name="experience" class="form-control" id="" cols="30" rows="4"></textarea>
								</div>

								<div class="form-group">
									<label for="">Bio</label>
									<textarea name="bio" class="form-control" id="" cols="30" rows="4"></textarea>
								</div>

								<div class="form-group">
									<button class="btn btn-success" type='submit'>Update</button>
								</div>
							</div>
						</div>

						@if(Session::has('message'))
							<div class="alert alert-success mt-2">
								{{Session::get('message')}}
							</div>
						@endif

					</form>
				</div>

				<div class="col-md-4">
					<div class="card">
						<div class="card-header">About You</div>
						<div class="card-body">
							<p>Name: {{Auth::user()->name}}</p>
							<p>Email: {{Auth::user()->email}}</p>
							<p>Address: {{Auth::user()->profile->address}}</p>
							<p>Gender: {{Auth::user()->profile->gender}}</p>
							<p>Experience: {{Auth::user()->profile->experience}}</p>
							<p>Bio: {{Auth::user()->profile->bio}}</p>
							<p>Member since: {{Auth::user()->created_at}}</p>
						</div>
					</div>

					<div class="card mt-2">
						<div class="card-header">Update Cover Letter</div>
						<div class="card-body">
							<input type="file" class="form-control" name="cover_letter">
							<button class="btn btn-success mt-3" type="submit">Update</button>
						</div>
					</div>

					<div class="card mt-2">
						<div class="card-header">Resume</div>
						<div class="card-body">
							<input type="file" class="form-control" name="resume">
							<button class="btn btn-success mt-3" type="submit">Update</button>						</div>
					</div>

				</div>
    </div>
</div>
@endsection
