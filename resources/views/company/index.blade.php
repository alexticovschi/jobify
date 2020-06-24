@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="company-profile">
            <img src="{{asset('cover/cov-photo.jpg')}}" width="100%" alt="">
                <div class="company-decription mt-3">
                    <h1>{{$company->cname}}</h1>

                    <h5 class="mb-3">{{$company->description}}</h5>

                    <p><strong>Slogan</strong>: {{$company->slogan}}</p>
                    <p><strong>Address</strong>: {{$company->address}}</p>
                    <p><strong>Phone</strong>: {{$company->phone}}</p>
                    <p><strong>Website</strong>: <a href="#">{{$company->website}}</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection