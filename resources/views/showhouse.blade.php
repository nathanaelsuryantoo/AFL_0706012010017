@extends('layout.mainlayout')
@section('title', $title)
@section('main_content')
<h1>{{$pagetitle}}</h1>
<div class="row m-5 mx-auto d-flex justify-content-center border">
    <div class="col-sm-5 p-4">
        <img src="{{asset('storage/'.$house['gambar'])}}" class="img-fluid"/>
    </div>
    <div class="col-sm-5 p-4 text-break img_icon">
        <h1 class="mb-4">Unit: {{$house['house_id']}}</h1>
        <p><img src="{{url('icon/land.png')}}"/>
            &nbsp;Luas Tanah: &nbsp;{{$house['luas_tanah']}}</p>
        <p><img src="{{url('icon/building.png')}}"/>
        &nbsp;Luas Bangunan: &nbsp;{{$house['luas_bangunan']}}</p>
        <p><img src="{{url('icon/bed.png')}}"/>
        &nbsp;Kamar Tidur: &nbsp;{{$house['kamar_tidur']}}</p>
        <p><img src="{{url('icon/bath.png')}}"/>
        &nbsp;Kamar Mandi: &nbsp;{{$house['kamar_mandi']}}</p>
        <p><img src="{{url('icon/money.png')}}"/>
        &nbsp;Harga Sewa: &nbsp;@currency($house['harga'])</p>
    </div>
</div>
<h1>List Lessee:</h1>
<div class="row mx-auto">
    @foreach ($house->lessee as $person)
    <div class="col-sm-4 p-4 text-break">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nama: {{$person['nama']}}</h4>
                <hr>
                <div class="img_icon">
                    NIK:&nbsp;{{$person['nik']}}&nbsp;
                    <br>
                    Rented House:&nbsp;{{$person['rented_house']}}&nbsp;
                    <a href="{{route('house.show', $person->house->house_id)}}"><img src="{{url('/icon/show.png')}}"/></a>
                    <br>
                    Rent From:&nbsp;{{$person['rent_from']}}&nbsp;
                    <br>
                    Rent Untill:&nbsp;{{$person['rent_until']}}&nbsp;
                    <br>
                </div>
                <hr>
                <div class="img_aksi">
                    <form action="{{route('lessee.destroy', $person->nik)}}" method="POST">
                    <a href="{{route('lessee.show', $person->nik)}}"><img src="{{url('/icon/show.png')}}" class="m-2"/></a>
                    <a href="{{route('lessee.edit', $person->nik)}}"><img src="{{url('/icon/edit.png')}}" class="m-2"/></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn bg_transparent"><img src="{{url('/icon/delete.png')}} "/></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="d-flex justify-content-center m-5">
    <a class="btn btn-outline-danger" href="{{route('house.index')}}">Back</a>
</div>
@endsection