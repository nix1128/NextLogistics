@extends('frontview.layouts.userView')



@section('title')
    Home
    @endsection

@section('content')

<h3 class = "text-center">Welcome to Home page</h3>


<br>
<br><br><br><br>
<div class="d-flex justify-content-md-center">


    <span class="logo-lg"><img src="{{asset('storage/images/NextLogistic.jpg')}}" class="img-responsive" ></span>
</div>

@endsection
@section('name')
    {{ $username }}

@endsection


{{--<img src="{{asset('storage/'.$comment->user->card->image)}} "  class="img-fluid shadow border border-warning"--}}
     {{--style = "border-radius: 60%;height: 60px;width: 60px;">--}}






