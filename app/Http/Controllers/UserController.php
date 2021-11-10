<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Book;
use App\User;

class UserController extends Controller
{
    function index(Request $request) {
        if($request->session()->has('id') != ""){
            $data_user = User::find($request->session()->get('id'));
        } else {
            $data_user = "";
        }

        $data_buku = Book::all();

        return view('user.landing-page', compact('request','data_buku','data_user'));
    }

    function detail(Request $request, $kategori, $slug) {
        if($request->session()->has('id') != ""){
            $data_user = User::find($request->session()->get('id'));
        } else {
            $data_user = "";
        }

        $data_buku = Book::where('link', $kategori.'/'.$slug)->first();

        return view('user.detail', compact('request','data_buku','data_user'));
    }

    function user(Request $request, $id, $token) {
        $data_user = User::find($id);

        if($data_user->token == $token) {
            if($data_user->account_status == "1") {
                return redirect(url('admin/dashboard'));
            } else {
                $data_user = User::find($request->session()->get('id'));

                return view('user.profile', compact('data_user','request'));
            }
        } else {
            Session::flash('gagal','Pengguna tidak ditemukan!');
            return redirect(url('login'));
        }
    }

    function user_edit(Request $request, $id, $token) {
        $data_user = User::find($id);

        if($data_user->token == $token) {
            $data_user->name = $request->input('nama');
            $data_user->phone = $request->input('hp');
            $data_user->address = $request->input('alamat');
            $data_user->save();

            Session::flash('sukses','Berhasil memperbarui profil.');
            return redirect(url('user/'.$id.'/'.$token));
        } else {
            Session::flash('gagal','Terjadi kesalahan. Coba lagi.');
            return redirect(url('user/'.$id.'/'.$token));
        }
    }

    function user_ganti(Request $request, $id) {
        $data_user = User::find($id);
        
        if($request->foto != ""){
            $img = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('img'), $img);
        } else {
            $img = $data_user->photo;
        }

        $data_user->photo = $img;
        $data_user->save();

        return redirect(url('user/'.$id.'/'.$data_user->token));
    }

    function user_hapus($id) {
        $data_user = User::find($id);
        $data_user->photo = "default-profile.png";
        $data_user->save();

        return redirect(url('user/'.$id.'/'.$data_user->token));
    }
}