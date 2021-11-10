@extends('layout.admin')

@section('title','Dashboard')

@section('a','active')

@section('nama','Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <a href="/admin/buku">
            <div class="card">
                <div class="card-body">
                    <h4>Daftar Buku</h4>
                </div>
            </div>
        </a>
        <a href="/admin/pinjam">
            <div class="card">
                <div class="card-body">
                    <h4>Peminjaman Buku</h4>
                </div>
            </div>
        </a>
        <a href="/admin/pengguna">
            <div class="card">
                <div class="card-body">
                    <h4>Daftar Pengguna</h4>
                </div>
            </div>
        </a>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".row .card").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection