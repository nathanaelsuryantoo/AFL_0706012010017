@extends('layout.mainlayout')
@section('title', $title)
@section('main_content')
<h1>{{$pagetitle}}</h1>
<form action="{{route('lessee.store')}}" method="post">
    @csrf
    <div class="form-group mb-3">
        <label class="mb-2" for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="nik">NIK:</label>
        <input type="text" class="form-control" id="nik" name="nik">
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" class="form-select" id="jenis_kelamin">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="umur">Umur:</label>
        <input type="number" class="form-control" id="umur" name="umur">
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="rented_house">Rented House:</label>
        <select name="rented_house" id="rented_house" class="form-select">
            @foreach ($house as $unit)
                <option value="{{$unit['house_id']}}">{{$unit['house_id']}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="rent_from">Rent From:</label>
        <input type="date" class="form-control" id="rent_from" name="rent_from">
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="rent_until">Rent For:</label>
        <select name="rent_until" id="rent_until" class="form-select">
            @for($i = 1; $i<=12; $i++)
                <option value="{{$i}}">{{$i}} Tahun</option>
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
    <button type="submit" class="btn warna_item_birutua text-white">Submit</button>
    <br><br>
</form>
@endsection