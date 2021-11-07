@extends('layout.mainlayout')
@section('title', $title)
@section('main_content')
<h1>{{$pagetitle}}</h1>
<div class="d-flex justify-content-end mb-3">
    <a class="btn btn-success pull-right" href="{{route('house.create')}}">
    <img src="{{url('icon/add.png')}}" width="20px" class="mx-2"/>Add House List</a>
</div>
<div class="row mx-auto">
    @foreach ($house as $unit)
    <div class="col-sm-4 p-4 text-break">
        <div class="card">
            <img src="{{asset('storage/'.$unit['gambar'])}}" class="img_rumah"/>
            <div class="card-body">
                <h4 class="card-title">Unit: {{$unit['house_id']}}</h4>
                <hr>
                <div class="img_icon">
                    <img src="{{url('/icon/land.png')}}"/>
                    &nbsp;{{$unit['luas_tanah']}}&nbsp;
                    <img src="{{url('/icon/building.png')}}"/>
                    &nbsp;{{$unit['luas_bangunan']}}&nbsp;
                    <img src="{{url('/icon/bed.png')}}"/>
                    &nbsp;{{$unit['kamar_tidur']}}&nbsp;
                    <img src="{{url('/icon/bath.png')}}"/>
                    &nbsp;{{$unit['kamar_mandi']}}&nbsp;
                    <hr>
                    <img src="{{url('/icon/money.png')}}"/>
                    &nbsp;@currency($unit['harga'])
                </div>
                <hr>
                <div class="img_aksi">
                    <form action="{{route('house.destroy', $unit->house_id)}}" method="POST">
                    <a href="{{route('house.show', $unit->house_id)}}"><img src="{{url('/icon/show.png')}}" class="m-2"/></a>
                    <a href="{{route('house.edit', $unit->house_id)}}"><img src="{{url('/icon/edit.png')}}" class="m-2"/></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn bg_transparent"><img src="{{url('/icon/delete.png')}}"/></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection