@extends('layout.mainlayout')
@section('title', $title)
@section('main_content')
<h1>{{$pagetitle}}</h1>
<div class="d-flex justify-content-end mb-3">
    <a class="btn btn-success pull-right" href="{{route('lessee.create')}}">
    <img src="{{url('icon/add.png')}}" width="20px" class="mx-2"/>Add Lessee</a>
</div>
<div class="row mx-auto">
    @foreach ($lessee as $person)
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
                    <button type="submit" class="btn bg_transparent"><img src="{{url('/icon/delete.png')}}"/></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection