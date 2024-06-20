@extends('layouts.app')

@section('content')


<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>

<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="container">
        <div class="container text-center ">
            <img src="{{asset('AdminUI/assets/images/error/404.png')}}" class="img-fluid mb-4 w-50" alt=""> 
            <h1 class="mb-0 mt-4 text-white">Page Not Found.</h1>
            <!-- <p class="mt-2">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. </p> -->
            <div class="d-flex justify-content-center">
                <a href="{{url('/home')}}" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </div>   
</div>

@endsection