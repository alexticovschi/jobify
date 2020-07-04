@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 mb-3">
					<form action="{{route('avatar')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="card">
							<div class="card-header">Company Logo</div>

							@if(empty(Auth::user()->profile->avatar))
								<img src="{{asset('avatar/man.jpg')}}" width="100" style="width: 100%;">
							@else
								<img src="{{asset('uploads/avatar')}}/{{Auth::user()->profile->avatar}}" width="100" style="width: 100%;">
							@endif
							
							<div class="card-body">
								<input type="file" class="form-control" name="avatar">
								<button class="btn btn-success btn-block mt-3" type="submit">Update</button>

								@if($errors->has('avatar'))
									<div class="error" style="color:red;">{{$errors->first('avatar')}}</div>
								@endif					
							</div>
						</div>
					</form>
				</div>

				<div class="col-md-5 mb-2">
					<form action="{{route('company.store')}}" method="POST">
						@csrf
						<div class="card">
							<div class="card-header">Update Your Company Information</div>
							<div class="card-body">
								<div class="form-group">
									<label for="">Address</label>
									<input type="text" class="form-control" name="address" value="{{Auth::user()->company->address}}">
								</div>

								<div class="form-group">
									<label for="">Phone</label>
									<input type="text" class="form-control" name="phone" value="{{Auth::user()->company->phone}}">
								</div>

								<div class="form-group">
									<label for="">Website</label>
									<input type="text" class="form-control" name="website" value="{{Auth::user()->company->website}}">
								</div>								
								
								<div class="form-group">
									<label for="">Slogan</label>
									<input type="text" class="form-control" name="slogan" value="{{Auth::user()->company->slogan}}">
								</div>

								<div class="form-group">
									<label for="">Description</label>
									<textarea class="form-control" name="description" id="" cols="30" rows="4">{{Auth::user()->company->description}}</textarea>
								</div>														

								<div class="form-group">
									<button class="btn btn-success btn-block" type='submit'>Update</button>
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
						<div class="card-header">About Your Company</div>
						<div class="card-body">
							<p>Name: {{Auth::user()->company->cname}}</p>
							<p>Address: {{Auth::user()->company->address}}</p>
							<p>Phone: {{Auth::user()->company->phone}}</p>
							<p>Website: <a href="//{{Auth::user()->company->website}}" target="blank">{{Auth::user()->company->website}}</a></p>
							<p>Slogan: {{Auth::user()->company->slogan}}</p>
							<p>Description: {{Auth::user()->company->description}}</p>
							<p>Company Page: <a href="/company/{{Auth::user()->company->id}}/{{Auth::user()->company->slug}}">View</a></p>
						</div>
					</div>

					<form action="{{route('cover.photo')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="card mt-2">
							<div class="card-header">Update Cover Photo</div>
							<div class="card-body">
								<input type="file" class="form-control" name="cover_photo">
								<button class="btn btn-success btn-block mt-3" type="submit">Update</button>

								@if($errors->has('cover_photo'))
									<div class="error" style="color:red;">{{$errors->first('cover_photo')}}</div>
								@endif
							</div>
						</div>
					</form>
				</div>
    </div>
</div>
@endsection
