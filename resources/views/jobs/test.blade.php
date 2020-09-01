@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              @foreach($applicants as $applicant)
                <div class="card-header">{{$applicant->title}}</div>

                <div class="card-body">
                  <h1>MIKI TEST</h1>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
