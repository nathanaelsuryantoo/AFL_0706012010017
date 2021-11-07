@extends('layout.mainlayout')
@section('title', $title)
@section('main_content')
<h1>{{$pagetitle}}</h1>
<form action="{{route('house.update', $house->house_id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input hidden name="_method" value="PATCH">
    <div class="form-group mb-3">
        <label class="mb-2" for="house_id">House ID:</label>
        <input type="text" class="form-control" id="house_id" name="house_id" value="{{$house->house_id}}">
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="luas_tanah">Luas Tanah:</label>
        <input type="number" class="form-control" id="luas_tanah" name="luas_tanah" value="{{$house->luas_tanah}}">
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="luas_bangunan">Luas Bangunan:</label>
        <input type="number" class="form-control" id="luas_bangunan" name="luas_bangunan" value="{{$house->luas_bangunan}}">
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="kamar_tidur">Kamar Tidur:</label>
        <input type="number" class="form-control" id="kamar_tidur" name="kamar_tidur" value="{{$house->kamar_tidur}}">
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="kamar_mandi">Kamar Mandi:</label>
        <input type="number" class="form-control" id="kamar_mandi" name="kamar_mandi" value="{{$house->kamar_mandi}}">
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="harga">Harga Sewa per Tahun:</label>
        <input type="number" class="form-control" id="harga" name="harga" value="{{$house->harga}}">
    </div>
    <div class="form-group mb-3">
        <label class="mb-2" for="gambar">Foto Rumah:</label>
        <input type="file" class="form-control-file" id="gambar" name="gambar">
        <input type="hidden" value="{{$house['gambar']}}" name="gambarlama">
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