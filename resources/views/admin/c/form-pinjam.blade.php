@extends('layout.admin')

@section('title','Peminjaman Buku')

@section('c','active')

@section('nama','Form Peminjaman Buku')

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

            @if ($message = Session::get('gagal'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{$message}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <form action="/admin/pinjam/save/{{$id}}/{{$id2}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_user">
                <div class="form-group">
                    <label>Nama Peminjam</label>
                    <input type="text" name="nama" value="{{$data_user->name}}" class="form-control form-control-lg" disabled>
                </div>
                <div class="form-group mb-5">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th class="border-top-0">ID</th>
                                <th class="border-top-0">Kategori</th>
                                <th class="border-top-0">Foto Sampul</th>
                                <th class="border-top-0">Judul</th>
                                <th class="border-top-0">Deskripsi</th>
                                <th class="border-top-0">Pengarang</th>
                                <th class="border-top-0">Penerbit</th>
                                <th class="border-top-0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_pinjam as $row)
                                @if ($row->id_user == $id2)
                                    @if ($row->id_pinjam == $id)
                                    <tr>
                                        <td>#{{$row->id_book}}</td>
                                        <td>{{$row->kategori}}</td>
                                        <td>
                                            <img src="{{asset('img/'.$row->gambar)}}" alt="Gambar Sampul" width="100" style="vertical-align: middle;">
                                        </td>
                                        <td>{{$row->judul}}</td>
                                        <td>{{$row->deskripsi}}</td>
                                        <td>{{$row->pengarang}}</td>
                                        <td>{{$row->penerbit}}</td>
                                        <td>
                                            <a href="/admin/pinjam/form/delete/{{$row->id}}/{{$id}}/{{$id2}}" title="Hapus baris">
                                                <i class="far fa-trash-alt text-danger" style="font-size: 14pt;"></i>
                                            </a>
                                            <input type="hidden" name="qty" value="{{count($data_pinjam)}}">
                                        </td>
                                    </tr>
                                    @endif
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Daftar Buku</button>
                </div>
                <div class="form-group">
                    <label>ID Member <span class="text-danger">*</span></label>
                    <input type="text" name="member" class="form-control">
                </div>
                <button type="submit" class="btn btn-outline-primary btn-block btn-lg mt-5">PINJAM</button>
            </form>
        </div>
    </div>
</div>

<!-- Daftar Buku Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="search" class="form-control" id="cari-modal" placeholder="Cari...">
                @foreach ($data_buku as $item)
                <a href="/admin/pinjam/new/pinjam/{{$item->id}}/{{$id}}/{{$id2}}">
                    <table class="table mt-3 tabel-buku" style="border-bottom: 1px solid rgba(0,0,0,.1);background-color: rgb(247, 252, 253);">
                        <tr>
                            <td rowspan="3" width="130">
                                <img src="{{asset('img/'.$item->gambar)}}" alt="Gambar Sampul" width="100" style="vertical-align: middle;">
                            </td>
                            <td style="vertical-align: middle;"><b>{{$item->judul}}</b></td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle;">{{$item->pengarang}}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle;">{{$item->penerbit}}</td>
                        </tr>
                    </table>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#cari-modal").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".tabel-buku").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection