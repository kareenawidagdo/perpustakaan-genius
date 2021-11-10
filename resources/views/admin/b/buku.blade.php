@extends('layout.admin')

@section('title','Daftar Buku')

@section('b','active')

@section('nama','Daftar Buku')

@section('btn')
<div class="d-md-flex">
    <a href="/admin/buku/create" class="btn btn-info d-md-block pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light ml-auto">
        Tambah Baru
    </a>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            @if ($message = Session::get('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border-top-0">Kategori</th>
                            <th class="border-top-0">Foto Sampul</th>
                            <th class="border-top-0">Judul</th>
                            <th class="border-top-0">Deskripsi</th>
                            <th class="border-top-0">Pengarang</th>
                            <th class="border-top-0">Penerbit</th>
                            <th class="border-top-0">Tanggal Terbit</th>
                            <th class="border-top-0">Lokasi Rak</th>
                            <th class="border-top-0"></th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($data_buku as $buku)
                        <tr>
                            <td>{{$buku->kategori}}</td>
                            <td>
                                <img src="{{ asset('img/'.$buku->gambar) }}" alt="{{$buku->judul}}" height="200">
                            </td>
                            <td>{{$buku->judul}}</td>
                            <td>{{Str::limit($buku->deskripsi, 200)}}</td>
                            <td>{{$buku->pengarang}}</td>
                            <td>{{$buku->penerbit}}</td>
                            <td>{{$buku->tgl_terbit}}</td>
                            <td>{{$buku->rak}}.{{$buku->laci}}</td>
                            <td>
                                <a href="/admin/buku/edit/{{$buku->id}}" class="btn btn-warning btn-block">Edit</a><br>
                                <a href="/admin/buku/hapus/{{$buku->id}}" class="btn btn-danger btn-block">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection