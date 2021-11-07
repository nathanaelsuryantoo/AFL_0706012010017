@extends('layout.mainlayout')
@section('title', $title)
@section('main_content')
<div class="img-fluid bg_image_home position-relative" style="height: 700px">
    <img class="position-absolute bottom-0 end-0" src="{{url('/image/RumahHome.png')}}"/>
    <div class="position-absolute text_home">
        <h1 class="mb-1">Find a perfect property</h1>
        <h1 class="mb-4">hasn't be this easy</h1>
        <p class="mb-1">We prove a best available service for your,</p>
        <p>purchase or rental of real estate.</p>
    </div>
</div>
@endsection