@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
          <img class="rounded-circle" src="{{asset('avatar/man.jpg')}}" width="100">
        </div>

				<div class="col-md-6">
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
				</div>

				<div class="col-md-4">
					<div class="card">
						<div class="card-header">Your Information</div>
						<div class="card-body">
							details of user
						</div>
					</div>

					<div class="card">
						<div class="card-header">Update Cover Letter</div>
						<div class="card-body">
							<input type="file" class="form-control" name="cover_letter">
							<button class="btn btn-success" type="submit">Update</button>
						</div>

						<div class="card-header">Resume</div>
						<div class="card-body">
							<input type="file" class="form-control" name="resume">
							<button class="btn btn-success" type="submit">Update</button>						</div>
					</div>
				</div>
    </div>
</div>
@endsection
