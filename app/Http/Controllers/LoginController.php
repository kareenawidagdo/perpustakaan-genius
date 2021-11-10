<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Session;
use App\User;

class LoginController extends Controller
{
    function index(Request $request) {
        if($request->session()->has('id') != ""){
            $data_user = User::find($request->session()->get('id'));
        } else {
            $data_user = "";
        }

        return view('akun.login', compact('request','data_user'));
    }

    function check(Request $request) {
        $validate_admin = User::where('email', $request->input('email'))
                                ->first();

        if($request->input('email') == "") {
            Session::flash('gagal','Isi kolom Email dan Password terlebih dahulu.');
            return redirect(url('login'));
        } else {
            if($validate_admin) {
                if(Hash::check($request->input('password'), $validate_admin->password)){
                    Auth::loginUsingId($validate_admin->id);
                    $request->session()->put('id', $validate_admin->id);
                    $validate_admin->last_login = now();
                    $validate_admin->save();
                    if($validate_admin->account_status == '1'){
                        return redirect(url('admin/dashboard'));
                    } else if($validate_admin->account_status == '2'){
                        return redirect(url('user/'.$validate_admin->id.'/'.$validate_admin->token));
                    }
                } else {
                    Session::flash('gagal','Email atau Password salah.');
                    return redirect(url('login'));
                }
            } else {
                Session::flash('gagal','Email belum terdaftar. Silakan registrasi akun.');
                return redirect(url('login'));
            }
        }
    }

    function logout(Request $request) {
        Auth::logout();
        $request->session()->forget('id');
        
        return redirect(url('/'));
    }

    function register(Request $request) {
        if($request->session()->has('id') != ""){
            $data_user = User::find($request->session()->get('id'));
        } else {
            $data_user = "";
        }

        return view('akun.register', compact('data_user','request'));
    }

    function create(Request $request) {
        $cek = User::where('email', $request->input('email'))->first();
        $password = $request->input('password');
        $pass = bcrypt($password);
        $token = Str::random(50);

        if($cek) {
            Session::flash('gagal','Email sudah terdaftar. Silakan login.');
            return redirect(url('register'));
        } else {
            $this->validate($request, [
                'name' => 'required|min:3|max:50',
                'email' => 'email',
                'password' => 'min:6',
                'hp' => 'min:11',
                'alamat' => 'required',
                'confirm_password' => 'required_with:password|same:password|min:6',
            ]);
    
            $data_user = User::create([
                "name" => $request->input("name"),
                "email" => $request->input("email"),
                "phone" => $request->input('hp'),
                "address" => $request->input('alamat'),
                "member" => mt_rand(100000,999999),
                "password" => $pass,
                "token" => $token,
                "account_status" => "2",
                "photo" => "default-profile.png",
                "created_at" => now(),
            ]);
        }

        Session::flash('sukses','Berhasil membuat akun. Silakan login.');
        return redirect(url('login'));
    }
}
