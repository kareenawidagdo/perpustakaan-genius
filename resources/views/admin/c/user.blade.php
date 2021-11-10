@extends('layout.admin')

@section('title','Peminjaman Buku')

@section('c','active')

@section('nama','Pilih Peminjam')

@section('content')
<div class="row">
    @foreach ($data_user as $row)
        @if ($row->account_status == "2")
        <div class="col-xs-12 col-md-6">
            <a href="/admin/pinjam/add/user/{{$row->id}}">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <img src="{{ asset('img/'.$row->photo) }}" alt="" style="width: 70px;height: 70px;border-radius: 100%;object-fit: cover;">
                            <span class="ml-2" style="font-size: 16pt;font-weight: 500;">{{$row->name}}</span>
                        </div>
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
                        </table>
                    </div>
                </div>
            </a>
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