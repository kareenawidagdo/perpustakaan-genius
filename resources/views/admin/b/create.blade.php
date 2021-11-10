@extends('layout.admin')

@section('title','Tambah Data Buku')

@section('b','active')

@section('nama','Tambah Buku')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <form action="/admin/buku/save" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Gambar Sampul</label><br>
                    <input type="file" name="foto">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                        <option value="" selected disabled></option>
                        <option value="Non-Fiksi">Non-Fiksi</option>
                        <option value="Romantis">Romantis</option>
                        <option value="Drama">Drama</option>
                        <option value="Komedi">Komedi</option>
                        <option value="Fantasi">Fantasi</option>
                        <option value="Action">Action</option>
                        <option value="Misteri">Misteri</option>
                        <option value="Horror">Horror</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control">
                </div>
                <div class="form-group">
                    <label>Pengarang</label>
                    <input type="text" name="pengarang" class="form-control">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="desc" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Penerbit</label>
                    <input type="text" name="penerbit" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tanggal Terbit</label>
                    <input type="date" name="tgl" class="form-control">
                </div>
                <div class="form-group">
                    <label>Lokasi Rak</label><br>
                    <select name="rak" class="form-control">
                        <option value="" selected disabled>Kode Rak</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                    </select>
                    <select name="laci" class="form-control mt-2">
                        <option value="" selected disabled>Kode Laci</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-primary btn-block btn-lg mt-5">SIMPAN</button>
            </form>
        </div>
    </div>
</div>
@endsection