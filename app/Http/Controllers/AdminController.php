<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Session;
use Carbon\Carbon;
use App\User;
use App\Book;
use App\Pinjam;
use App\PinjamDetail;

class AdminController extends Controller
{
    function index() {
        return view('admin.a.dashboard');
    }

    function buku() {
        $data_buku = Book::all();

        return view('admin.b.buku', compact('data_buku'));
    }

    function create() {
        return view('admin.b.create');
    }

    function save(Request $request) {
        if($request->foto != "") {
            $img = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('img'), $img);
        } else {
            $img = "default-sampul.png";
        }
        $slug = Str::slug($request->judul);

        $data_buku = Book::create([
            'judul' => $request->input('judul'),
            'kategori' => $request->input('kategori'),
            'gambar' => $img,
            'pengarang' => $request->input('pengarang'),
            'penerbit' => $request->input('penerbit'),
            'tgl_terbit' => $request->input('tgl'),
            'deskripsi' => $request->input('desc'),
            'slug' => $slug,
            'link' => strtolower($request->input('kategori')) . '/' . $slug,
            'rak' => $request->input("rak"),
            'laci' => $request->input("laci")
        ]);

        Session::flash('sukses','Berhasil menyimpan data.');
        return redirect(url('admin/buku'));
    }

    function edit($id) {
        $data_buku = Book::find($id);

        return view('admin.b.edit', compact('data_buku'));
    }

    function update(Request $request, $id) {
        $data_buku = Book::find($id);

        if($request->foto != ""){
            $img = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('img'), $img);

            File::delete(public_path('img/'.$data_buku->gambar));
        } else {
            $img = $data_buku->gambar;
        }
        $slug = Str::slug($request->judul);

        $data_buku->update([
            'judul' => $request->input('judul'),
            'kategori' => $request->input('kategori'),
            'gambar' => $img,
            'pengarang' => $request->input('pengarang'),
            'penerbit' => $request->input('penerbit'),
            'tgl_terbit' => $request->input('tgl'),
            'deskripsi' => $request->input('desc'),
            'slug' => $slug,
            'rak' => $request->input("rak"),
            'laci' => $request->input("laci")
        ]);

        Session::flash('sukses','Berhasil memperbarui data.');
        return redirect(url('admin/buku'));
    }

    function delete($id) {
        $data_buku = Book::find($id);
        $data_buku->delete();

        Session::flash('sukses','Berhasil menghapus data.');
        return redirect(url('admin/buku'));
    }
    
    function pinjam() {
        // $data_pinjam = Pinjam::join('pinjam_detail','pinjam_detail.id_pinjam','=','pinjam.id')
        //         ->join('books','pinjam_detail.id_book','=','books.id')
        //         ->join('users','pinjam.id_user','=','users.id')
        //         ->select('users.*','books.*','pinjam_detail.*','pinjam.*')
        //         ->get();

        $data_pinjam = Pinjam::join('users','pinjam.id_user','=','users.id')
                ->select('users.*','pinjam.*')
                ->get();
        
        $data_pindet = PinjamDetail::join('books','pinjam_detail.id_book','=','books.id')
                ->select('books.*','pinjam_detail.*')
                ->get();

        return view('admin.c.pinjam', compact('data_pinjam','data_pindet'));
    }

    function peminjam() {
        $data_user = User::all();

        return view('admin.c.user', compact('data_user'));
    }

    function form_pinjam($id) {
        $data_user = User::find($id);
        $data_pinjam = Pinjam::create([
            "id_user" => $id,
            "tgl_pinjam" => Carbon::now()->format('Y-m-d'),
        ]);

        return redirect(url('admin/pinjam/new/form/'.$data_pinjam->id.'/'.$id));
    }

    function new_form($id, $id2) {
        $data_user = User::find($id2);
        $data_pinjam = Pinjam::join('pinjam_detail','pinjam_detail.id_pinjam','=','pinjam.id')
                    ->join('books','pinjam_detail.id_book','=','books.id')
                    ->join('users','pinjam.id_user','=','users.id')
                    ->select('users.*','books.*','pinjam.*','pinjam_detail.*')
                    ->get();
        $data_buku = Book::all();

        return view('admin.c.form-pinjam', compact('data_user','data_pinjam','data_buku','id','id2'));
    }

    function buku_pinjam($id, $id2, $id3) {
        $data_pindet = PinjamDetail::create([
            "id_user" => $id3,
            "id_pinjam" => $id2,
            "id_book" => $id
        ]);

        return redirect(url('admin/pinjam/new/form/'.$id2.'/'.$id3));
    }

    function save_pinjam(Request $request, $id, $id2) {
        $data_user = User::find($id2);
        $data_pinjam = Pinjam::find($id);

        if($request->input('member') == $data_user->member) {
            $data_pinjam->approval = "yes";
            $data_pinjam->save();

            Session::flash('sukses','Pinjam #'.$id.' telah ditambahkan.');
            return redirect(url('admin/pinjam'));
        } else {
            Session::flash('gagal','ID Member salah!');
            return redirect(url('admin/pinjam/new/form/'.$id.'/'.$id2));
        }
    }

    function hapus_bukpin($id, $id2, $id3) {
        $data_pindet = PinjamDetail::find($id);
        $data_pindet->delete();

        Session::flash('sukses','Berhasil menghapus buku dari daftar pinjaman.');
        return redirect(url('admin/pinjam/new/form/'.$id2.'/'.$id3));
    }

    function kembalikan($id) {
        $data_pinjam = Pinjam::find($id);
        $data_pinjam->tgl_kembali = Carbon::now()->format('Y-m-d');
        $data_pinjam->save();

        Session::flash('sukses','Satu pinjaman buku sudah dikembalikan.');
        return redirect(url('admin/pinjam'));
    }

    function users() {
        $data_user = User::all();

        return view('admin.d.users', compact('data_user'));
    }

    function hapus_user($id) {
        $data_user = User::find($id);
        $data_user->delete();

        return redirect(url('admin/pengguna'));
    }
}
