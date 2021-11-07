@extends('layout.mainlayout')
@section('title', $title)
@section('main_content')
<h1>{{$pagetitle}}</h1>
<div class="row m-5 mx-auto d-flex justify-content-center border">
    <div class="text-break p-5 img_icon">
        <h1 class="mb-4">Nama: {{$lessee['nama']}}</h1>
        <p>&nbsp;NIK: &nbsp;{{$lessee['nik']}}</p>
        <p>&nbsp;Jenis Kelamin: &nbsp;{{$lessee['jenis_kelamin']}}</p>
        <p>&nbsp;Umur: &nbsp;{{$lessee['umur']}}</p>
        <p>
            &nbsp;Rented House: &nbsp;{{$lessee['rented_house']}}
            <a href="{{route('house.show', $lessee->house->house_id)}}"><img src="{{url('/icon/show.png')}}"/></a>
        </p>
        <p>&nbsp;Rent From: &nbsp;{{$lessee['rent_from']}}</p>
        <p>&nbsp;Rent Untill: &nbsp;{{$lessee['rent_untill']}}</p>
    </div>
</div>
<div class="d-flex justify-content-center m-5">
    <a class="btn btn-outline-danger clearfix" href="{{route('lessee.index')}}">Back</a>
</div>
@endsection