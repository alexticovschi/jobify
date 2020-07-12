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
									<input type="date" name="last_date" class="form-control">
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
