@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
					<div class="card">
						<div class="card-header">
							<h2 class="text-center my-2">Add Job</h2>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="title">Title:</label>
								<input type="text" name="title" class="form-control">
							</div>

							<div class="form-group">
								<label for="decription">Description:</label>
								<input type="text" name="decription" class="form-control">
							</div>			

							<div class="form-group">
								<label for="roles">Role:</label>
								<textarea name="roles" class="form-control"></textarea>
							</div>

							<div class="form-group">
								<label for="category">Category:</label>
								<select type="text" name="category" class="form-control">
									@foreach(App\Category::all() as $category)
										<option value="{{$category->name}}">{{$category->name}}</option>
									@endforeach
								</select>
							</div>

							<div class="form-group">
								<label for="position">Position:</label>
								<input type="text" name="position" class="form-control">
							</div>		

							<div class="form-group">
								<label for="address">Address:</label>
								<input type="text" name="address" class="form-control">
							</div>

							<div class="form-group">
								<label for="type">Type:</label>
								<select type="text" name="type" class="form-control">
									<option value="fulltime">Part Time</option>
									<option value="partime">Full Time</option>
									<option value="contract">Contract</option>
								</select>							
							</div>	
							
							<div class="form-group">
								<label for="title">Status:</label>
								<select type="text" name="type" class="form-control">
									<option value="1">Live</option>
									<option value="0">Draft</option>
								</select>								
							</div>	

							<div class="form-group">
								<label for="last date">Last Date:</label>
								<input type="date" name="last_date" class="form-control">
							</div>		

							<div class="form-group">
								<button class="btn btn-success btn-block" type='submit'>Submit</button>
							</div>
						</div>
					</div>
				</div>
    </div>
</div>
@endsection
