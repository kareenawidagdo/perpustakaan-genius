@extends('layout.admin')

@section('title','Pengguna')

@section('d','active')

@section('nama','Daftar Pengguna')

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
                            <th class="border-top-0">ID</th>
                            <th class="border-top-0">Nama</th>
                            <th class="border-top-0">Email</th>
                            <th class="border-top-0">No. HP</th>
                            <th class="border-top-0">Alamat</th>
                            <th class="border-top-0"></th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($data_user as $row)
                            @if ($row->account_status == "2")
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>
                                    <img src="{{ asset('img/'.$row->photo) }}" alt="{{$row->name}}" style="width: 30px;height: 30px;border-radius: 100%;object-fit: cover;" class="mr-2">
                                    {{$row->name}}
                                </td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->phone}}</td>
                                <td>{{$row->address}}</td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#hapusModal-{{$row->id}}">Hapus</button>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Hapus Modal -->
@foreach ($data_user as $du)
<div class="modal fade" id="hapusModal-{{$du->id}}" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel">&nbsp;</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4><b>Apakah Anda yakin ingin menghapus user ini?</b></h4>
                <table class="table-responsive mt-4 mb-4">
                    <tr>
                        <td>Nama</td>
                        <td class="text-center" width="30">:</td>
                        <td>{{$du->name}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td class="text-center">:</td>
                        <td>{{$du->email}}</td>
                    </tr>
                    <tr>
                        <td>No. HP</td>
                        <td class="text-center">:</td>
                        <td>{{$du->phone}}</td>
                    </tr>
                    <tr>
                        <td class="align-top">Alamat</td>
                        <td class="text-center align-top">:</td>
                        <td>{{$du->address}}</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                <a href="/admin/pengguna/hapus/{{$du->id}}" type="button" class="btn btn-success text-white">Yes</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection