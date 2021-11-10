@extends('layout.admin')

@section('title','Peminjaman Buku')

@section('c','active')

@section('nama','Daftar Peminjaman Buku')

@section('btn')
<div class="d-md-flex">
    <a href="/admin/pinjam/new/user" class="btn btn-info d-md-block pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light ml-auto">
        Pinjam
    </a>
</div>
@endsection

@section('content')
@if ($message = Session::get('sukses'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{$message}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="row">
    @foreach ($data_pinjam as $row)
        @if ($row->approval == "yes" && $row->tgl_kembali == "")
        <div class="col-xs-12 col-md-6 cari">
            <div class="card">
                <div class="card-body">
                    <h4>Pinjam #{{$row->id}}</h4>
                    <table class="table-responsive">
                        <tr>
                            <td>Nama</td>
                            <td class="text-center" width="30">:</td>
                            <td>{{$row->name}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td class="text-center">:</td>
                            <td>{{$row->email}}</td>
                        </tr>
                        <tr>
                            <td>No. HP</td>
                            <td class="text-center">:</td>
                            <td>{{$row->phone}}</td>
                        </tr>
                        <tr>
                            <td class="align-top">Alamat</td>
                            <td class="text-center align-top">:</td>
                            <td>{{$row->address}}</td>
                        </tr>
                    </table><br>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Gambar Sampul</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Tanggal Terbit</th>
                                <th>Lokasi Rak</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_pindet as $dp)
                                @if ($dp->id_user == $row->id_user)
                                    @if ($dp->id_pinjam == $row->id)
                                        <tr>
                                            <td>
                                                <img src="{{asset('img/'.$dp->gambar)}}" alt="Gambar Sampul" width="50" style="vertical-align: middle;">
                                            </td>
                                            <td>{{$dp->judul}}</td>
                                            <td>{{$dp->pengarang}}</td>
                                            <td>{{$dp->penerbit}}</td>
                                            <td>{{$dp->tgl_terbit}}</td>
                                            <td>{{$dp->rak}}.{{$dp->laci}}</td>
                                        </tr>
                                    @endif
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                    <a href="/admin/pinjam/kembali/{{$row->id}}" class="btn btn-outline-danger btn-block">Kembalikan</a>
                </div>
            </div>
        </div>
        @endif
    @endforeach
</div>

<script>
    $(document).ready(function(){
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".cari .card").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection