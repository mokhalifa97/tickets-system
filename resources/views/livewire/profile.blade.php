@extends('layouts.app')
@section('content')
    
<div>
    <div class="card">
        <div class="card-header d-flex align-item-center">
            <h5>Hello, {{$user->name}}</h5>
            
        </div>
        <div class="card-body col-md-12 mt-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 ">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="...">
                </div>
                <div class="col-lg-6 px-xl-10 mb-5">
                    <div class="bg-danger p-3 d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                        <h3 class="h2 text-white mb-0">{{$user->name}}</h3>
                    </div>
                    <ul class="list-unstyled mb-1-9 mt-5">
                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">UserName:</span> {{$user->name}}</li>
                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">ID:</span> {{$user->id}}</li>
                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> {{$user->email}}</li>

                        {{-- <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Website:</span> www.example.com</li>
                        <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> 507 - 541 - 4567</li> --}}
                    </ul>
                    <a href="{{route('add')}}"  class="btn btn-success">Add information</a>
                </div>
            </div>
    </div>
</div>

@endsection
