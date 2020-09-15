@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
					@if(Session::has('message'))
						<div class="alert alert-success my-2">
							{{Session::get('message')}}
						</div>
					@endif

					<div class="card">
						<div class="card-header">
							<h2 class="text-center my-2">Update Job</h2>
						</div>
						<div class="card-body">
							<form action="{{route('job.update', [$job->id])}}" method="POST">
								@csrf
								<div class="form-group">
									<label for="title">Title:</label>
									<input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $job->title }}">

									 @if ($errors->has('title'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                      </span>
                    @endif
								</div>

								<div class="form-group">
									<label for="description">Description:</label>
									<textarea name="roles" class="form-control @error('roles') is-invalid @enderror">{{ $job->description }}</textarea>

									@if ($errors->has('description'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                      </span>
                    @endif
								</div>			

								<div class="form-group">
									<label for="roles">Role:</label>
									<textarea name="roles" class="form-control @error('roles') is-invalid @enderror">{{ $job->roles }}</textarea>

									@if ($errors->has('roles'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('roles') }}</strong>
                    </span>
                  @endif
								</div>

								<div class="form-group">
									<label for="category">Category:</label>
									<select type="text" name="category_id" class="form-control">
										@foreach(App\Category::all() as $category)
											<option value="{{$category->id}}" {{ $category->id === $job->category_id ? 'selected' : ''}}>{{$category->name}}</option>
										@endforeach
									</select>
								</div>

								<div class="form-group">
									<label for="position">Position:</label>
									<input type="text" name="position" class="form-control @error('position') is-invalid @enderror" value="{{ $job->position }}">

									@if ($errors->has('position'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('position') }}</strong>
                    </span>
                  @endif
								</div>		

								<div class="form-group">
									<label for="address">Address:</label>
									<input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ $job->address }}">


									@if ($errors->has('address'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('address') }}</strong>
                    </span>
                  @endif								
								</div>

								<div class="form-group">
									<label for="number_of_vacancy">No of vacancy:</label>
									<input type="text" name="number_of_vacancy" class="form-control @error('number_of_vacancy') is-invalid @enderror" value="{{ $job->number_of_vacancy }}">


									@if ($errors->has('number_of_vacancy'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('number_of_vacancy') }}</strong>
                    </span>
                  @endif								
								</div>

								<div class="form-group">
									<label for="experience">Experience:</label>
									<input type="text" name="experience" class="form-control @error('experience') is-invalid @enderror" value="{{ $job->experience }}">


									@if ($errors->has('experience'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('experience') }}</strong>
                    </span>
                  @endif								
								</div>

								<div class="form-group">
									<label for="gender">Gender:</label>
	
									<select type="text" name="gender" class="form-control">
										<option value="any" {{ $job->gender === 'any' ? 'selected' : '' }}>Any</option>
										<option value="male" {{ $job->gender === 'male' ? 'selected' : '' }}>Male</option>
										<option value="female" {{ $job->gender === 'female' ? 'selected' : '' }}>Female</option>
									</select>									
								</div>
								
								<div class="form-group">
									<label for="salary">Salary per Year:</label>
									<select name="salary" class="form-control">
										<option value="negotiable">Negotiable</option>
										<option value="20000-5000">20000-50000</option>
										<option value="50000-100000">50000-700000</option>
										<option value="70000-100000">70000-100000</option>
										<option value="100000-120000">100000-120000</option>
										<option value="120000-140000">120000-140000</option>
 										<option value="160000 plus">160000 +</option>
									</select>							
								</div>	

								<div class="form-group">
									<label for="type">Type:</label>
									<select type="text" name="type" class="form-control">
										<option value="fulltime" {{ $job->type === 'fulltime' ? 'selected' : '' }}>Full Time</option>
										<option value="parttime" {{ $job->type === 'parttime' ? 'selected' : '' }}>Part Time</option>
										<option value="contract" {{ $job->type === 'contract' ? 'selected' : '' }}>Contract</option>
									</select>							
								</div>	
								
								<div class="form-group">
									<label for="status">Status:</label>
									<select type="text" name="status" class="form-control">
										<option value="1" {{ $job->status === 1 ? 'selected' : '' }}>Live</option>
										<option value="0" {{ $job->status === 0 ? 'selected' : '' }}>Draft</option>
									</select>								
								</div>	

								<div class="form-group">
									<label for="last date">Last Date:</label>
									<input type="text" id="datepicker" name="last_date" class="form-control" @error('last_date') is-invalid @enderror value="{{ $job->last_date }}">


									@if ($errors->has('last_date'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('last_date') }}</strong>
                    </span>
                  @endif								
								</div>		

								<div class="form-group">
									<button class="btn btn-success btn-block" type='submit'>Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
    </div>
</div>
@endsection
