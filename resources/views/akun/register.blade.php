@extends('layout.user')

@section('title')
    Sign Up
@endsection

@section('body')
    page-template page-template-page-templates page-template-template_fullwidth page-template-page-templatestemplate_fullwidth-php page page-id-7 theme-leto woocommerce-account woocommerce-page woocommerce-js elementor-default elementor-kit-1331
@endsection

@section('content')

<div id="content" class="site-content">
    <div class="container clearfix">
        <div class="row">
            <div id="primary" class="content-area fullwidth" style="margin: 0 3rem;">
                <main id="main" class="site-main" role="main">
                    <article id="post-7" class="post-7 page type-page status-publish hentry ">
                        <div class="entry-content">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <h2>Sign Up</h2>
                                @if ($message = Session::get('sukses'))
                                    <div class="alert alert-success mt--3 mb-5" role="alert">
                                        <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                                        <span class="alert-text p-2">{{$message}}</span>
                                    </div>
                                @endif

                                @if ($message = Session::get('gagal'))
                                    <div class="alert alert-danger mt--3 mb-5" role="alert">
                                        <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                                        <span class="alert-text p-2">{{$message}}</span>
                                    </div>
                                @endif

                                @if (count($errors) > 0)
                                <div class="alert alert-danger mt--3 mb-5" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <form action="/auth-register" method="POST" class="woocommerce-form woocommerce-form-login login">
                                    @csrf
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="username">Nama&nbsp;<span class="required">*</span></label>
                                        <input type="text" name="name" class="woocommerce-Input woocommerce-Input--text input-text" autocomplete="name">
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="username">Email&nbsp;<span class="required">*</span></label>
                                        <input type="text" name="email" class="woocommerce-Input woocommerce-Input--text input-text" autocomplete="email">
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="username">No. HP&nbsp;<span class="required">*</span></label>
                                        <input type="text" name="hp" class="woocommerce-Input woocommerce-Input--text input-text" autocomplete="tel">
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="username">Alamat&nbsp;<span class="required">*</span></label>
                                        <input type="text" name="alamat" class="woocommerce-Input woocommerce-Input--text input-text" autocomplete="address-level1">
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="password">Password&nbsp;<span class="required">*</span></label>
                                        <span class="password-input"><input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password"><span class="show-password-input"></span></span>
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="password">Konfirmasi Password&nbsp;<span class="required">*</span></label>
                                        <span class="password-input"><input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="confirm_password" id="password"><span class="show-password-input"></span></span>
                                    </p>
                                    <p class="form-row">
                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme" style="margin-bottom: 3rem;"></label>
                                        <input type="hidden" name="_wp_http_referer" value="/leto/my-account/">
                                        <button type="submit" class="button alt btn-block mt-2" name="sign_up" value="Sign Up">Sign Up</button>
                                    </p>
                                    <p class="text-center">
                                        Sudah punya akun? <a href="/login" class="woocommerce-LostPassword">Login</a>.
                                    </p>
                                </form>
                            </div>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
</div>

@endsection