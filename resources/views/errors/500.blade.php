@extends('layouts.app')

@section('content')

<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="container text-center">
        <img src="../../assets/images/error/500.webp" class="img-fluid mb-4 w-50" alt=""> 
        <h2 class="mb-0 mt-4">Internal Server Error</h2>
        <p class="mt-2">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. </p>
        <div class="d-flex justify-content-center">
            <a href="../index.html" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
</div>


@endsection