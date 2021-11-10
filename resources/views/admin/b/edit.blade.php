@extends('layout.admin')

@section('title','Edit Data Buku')

@section('b','active')

@section('nama','Edit Buku')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <form action="/admin/buku/update/{{$data_buku->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Gambar Sampul</label><br>
                    <input type="file" name="foto">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                        <option value="Non-Fiksi" @if($data_buku->kategori == "Non-Fiksi") selected @endif>Non-Fiksi</option>
                        <option value="Romantis" @if($data_buku->kategori == "Romantis") selected @endif>Romantis</option>
                        <option value="Drama" @if($data_buku->kategori == "Drama") selected @endif>Drama</option>
                        <option value="Komedi" @if($data_buku->kategori == "Komedi") selected @endif>Komedi</option>
                        <option value="Fantasi" @if($data_buku->kategori == "Fantasi") selected @endif>Fantasi</option>
                        <option value="Action" @if($data_buku->kategori == "Action") selected @endif>Action</option>
                        <option value="Misteri" @if($data_buku->kategori == "Misteri") selected @endif>Misteri</option>
                        <option value="Horror" @if($data_buku->kategori == "Horror") selected @endif>Horror</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" value="{{$data_buku->judul}}">
                </div>
                <div class="form-group">
                    <label>Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" value="{{$data_buku->pengarang}}">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="desc" rows="5" class="form-control">{{$data_buku->deskripsi}}</textarea>
                </div>
                <div class="form-group">
                    <label>Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" value="{{$data_buku->penerbit}}">
                </div>
                <div class="form-group">
                    <label>Tanggal Terbit</label>
                    <input type="date" name="tgl" class="form-control" value="{{$data_buku->tgl_terbit}}">
                </div>
                <div class="form-group">
                    <label>Lokasi Rak</label><br>
                    <select name="rak" class="form-control">
                        <option value="A" @if($data_buku->rak == "A") selected @endif>A</option>
                        <option value="B" @if($data_buku->rak == "B") selected @endif>B</option>
                        <option value="C" @if($data_buku->rak == "C") selected @endif>C</option>
                        <option value="D" @if($data_buku->rak == "D") selected @endif>D</option>
                        <option value="E" @if($data_buku->rak == "E") selected @endif>E</option>
                        <option value="F" @if($data_buku->rak == "F") selected @endif>F</option>
                    </select>
                    <select name="laci" class="form-control mt-2">
                        <option value="1" @if($data_buku->laci == "1") selected @endif>1</option>
                        <option value="2" @if($data_buku->laci == "2") selected @endif>2</option>
                        <option value="3" @if($data_buku->laci == "3") selected @endif>3</option>
                        <option value="4" @if($data_buku->laci == "4") selected @endif>4</option>
                        <option value="5" @if($data_buku->laci == "5") selected @endif>5</option>
                        <option value="6" @if($data_buku->laci == "6") selected @endif>6</option>
                        <option value="7" @if($data_buku->laci == "7") selected @endif>7</option>
                        <option value="8" @if($data_buku->laci == "8") selected @endif>8</option>
                        <option value="9" @if($data_buku->laci == "9") selected @endif>9</option>
                        <option value="10" @if($data_buku->laci == "10") selected @endif>10</option>
                        <option value="11" @if($data_buku->laci == "11") selected @endif>11</option>
                        <option value="12" @if($data_buku->laci == "12") selected @endif>12</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-primary btn-block btn-lg mt-5">UPDATE</button>
            </form>
        </div>
    </div>
</div>
@endsection