@extends('layout.mainlayout')
@section('title', $title)
@section('main_content')
<h1>{{$pagetitle}}</h1>
<form action="{{route('lessee.update', $lessee->nik)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PATCH"/>
    <div class="form-group mb-3">
        <label class="mb-2" for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{$lessee->nama}}">
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="nik">NIK:</label>
        <input type="text" class="form-control" id="nik" name="nik" value="{{$lessee->nik}}">
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" class="form-select" id="jenis_kelamin">
            <option hidden value="{{$lessee->jenis_kelamin}}">
                {{$lessee->jenis_kelamin}}
            </option>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="umur">Umur:</label>
        <input type="number" class="form-control" id="umur" name="umur" value="{{$lessee->umur}}">
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="rented_house">Rented House:</label>
        <select name="rented_house" id="rented_house" class="form-select">
            @foreach ($house as $unit)
            @if ($unit['house_id'] == $lessee['rented_house'])
            <option value="{{$unit['house_id']}}" selected>{{$unit['house_id']}}</option>
            @else
            <option value="{{$unit['house_id']}}">{{$unit['house_id']}}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="rent_from">Rent From:</label>
        <input type="date" class="form-control" id="rent_from" name="rent_from" value="{{$lessee->rent_from}}">
    </div>
    @php
        $datetime1 = new DateTime($lessee->rent_from);
        $datetime2 = new DateTime($lessee->rent_until);
        $jarakpinjam = $datetime1->diff($datetime2);
    @endphp
    <div class="form-group mb-3">
        <label class="mb-2" for="rent_until">Rent For:</label>
        <select name="rent_until" id="rent_until" class="form-select">
            @for($i = 1; $i<=12; $i++)
                @if ($i == $jarakpinjam->y)
                    <option value="{{$i}}" selected>{{$i}} Tahun</option>
                @else
                    <option value="{{$i}}">{{$i}} Tahun</option>
                @endif
            @endfor
        </select>
    </div>
    @if ($errors->any())
    <br>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <br><br>
</form>
@endsection