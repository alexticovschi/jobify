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
							<h2 class="text-center my-2">Add Job</h2>
						</div>
						<div class="card-body">
							<form action="{{route('jobs.store')}}" method="POST">
								@csrf
								<div class="form-group">
									<label for="title">Title:</label>
									<input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title')}}">

									@if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('title') }}</strong>
                    </span>
                  @endif
								</div>
								<div class="form-group">
									<label for="description">Description:</label>
									<textarea type="text" name="description" class="form-control  @error('description') is-invalid @enderror">{{ old('description') }}</textarea>

									@if ($errors->has('description'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                      </span>
                    @endif
								</div>			

								<div class="form-group">
									<label for="roles">Role:</label>
									<textarea name="roles" class="form-control @error('roles') is-invalid @enderror">{{ old('roles') }}</textarea>

									@if ($errors->has('roles'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('roles') }}</strong>
                    </span>
                  @endif
								</div>

								<div class="form-group">
									<label for="category">Category:</label>
									<select type="text" name="category" class="form-control">
										@foreach(App\Category::all() as $category)
											<option value="{{$category->id}}">{{$category->name}}</option>
										@endforeach
									</select>
								</div>

								<div class="form-group">
									<label for="position">Position:</label>
									<input type="text" name="position" class="form-control @error('position') is-invalid @enderror" value="{{ old('position')}}">

									@if ($errors->has('position'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('position') }}</strong>
                    </span>
                  @endif
								</div>		

								<div class="form-group">
									<label for="address">Address:</label>
									<input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address')}}">


									@if ($errors->has('address'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('address') }}</strong>
                    </span>
                  @endif								
								</div>

								<div class="form-group">
									<label for="type">Type:</label>
									<select type="text" name="type" class="form-control">
										<option value="fulltime">Part Time</option>
										<option value="parttime">Full Time</option>
										<option value="contract">Contract</option>
									</select>							
								</div>	
								
								<div class="form-group">
									<label for="status">Status:</label>
									<select type="text" name="status" class="form-control">
										<option value="1">Live</option>
										<option value="0">Draft</option>
									</select>								
								</div>	

								<div class="form-group">
									<label for="last date">Last Date:</label>
									<input type="text" id="datepicker" name="last_date" class="form-control">
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
