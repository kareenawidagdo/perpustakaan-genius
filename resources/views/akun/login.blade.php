@extends('layout.user')

@section('title')
    Login
@endsection

@section('body')
    page-template page-template-page-templates page-template-template_fullwidth page-template-page-templatestemplate_fullwidth-php page page-id-7 theme-leto woocommerce-account woocommerce-page woocommerce-js elementor-default elementor-kit-1331
@endsection

@section('content')
<div id="content" class="site-content mt-5">
    <div class="container clearfix">
        <div class="row">
            <div id="primary" class="content-area fullwidth" style="margin: 0 3rem;">
                <main id="main" class="site-main" role="main">
                    <article id="post-7" class="post-7 page type-page status-publish hentry ">
                        <div class="entry-content">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <h2>Login</h2>
                                
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

                                <form action="{{ url('auth-login') }}" method="POST" class="woocommerce-form woocommerce-form-login login" enctype="multipart/form-data">
                                    @csrf
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="username">Email&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="username" autocomplete="username" value="">
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="password">Password&nbsp;<span class="required">*</span></label>
                                        <span class="password-input"><input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password"><span class="show-password-input"></span></span>
                                    </p>
                                    <p class="form-row">
                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme" style="margin-bottom: 3rem;">
                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="show" type="checkbox" id="show" value="forever"> <span>Show Password</span>
                                        </label>
                                        <input type="hidden" name="_wp_http_referer" value="/leto/my-account/">
                                        <button type="submit" class="button alt btn-block mt-3" name="login" value="Log in">Log in</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                        <p class="text-center mt-6">
                            Belum punya akun? <a href="/register" class="woocommerce-LostPassword">Sign Up</a>.
                        </p>
                    </article>
                </main>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#show').click(function(){
            if($('#show').is(':checked')){
                $('#password').attr('type', 'text');
            } else {
                $('#password').attr('type', 'password');
            }
        });
    });
</script>
@endsection