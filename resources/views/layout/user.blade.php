<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">

	<!-- Meta Data -->
	@yield('meta')

	<!-- Title -->
	<title>@yield('title')</title>
	
	<!-- Import Links -->
	<meta name="robots" content="max-image-preview:large">
	<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
	<link rel="dns-prefetch" href="https://s.w.org/">
	<link href="https://fonts.gstatic.com/" crossorigin="" rel="preconnect">
	<link rel="alternate" type="application/rss+xml" title="Leto » Feed" href="https://demo.athemes.com/leto/feed/">
	<link rel="alternate" type="application/rss+xml" title="Leto » Comments Feed" href="https://demo.athemes.com/leto/comments/feed/">
	<link rel="https://api.w.org/" href="https://demo.athemes.com/leto/wp-json/">
	<link rel="alternate" type="application/json" href="https://demo.athemes.com/leto/wp-json/wp/v2/pages/231">
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.athemes.com/leto/xmlrpc.php?rsd">
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://demo.athemes.com/leto/wp-includes/wlwmanifest.xml">
	<link rel="alternate" type="application/json+oembed" href="https://demo.athemes.com/leto/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.athemes.com%2Fleto%2F">
	<link rel="alternate" type="text/xml+oembed" href="https://demo.athemes.com/leto/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.athemes.com%2Fleto%2F&amp;format=xml">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
	
	<!-- Script JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src={{ asset('js/ae0508e4dc') }}></script>
	<script src={{ asset('js/nr-spa-1208.min.js') }}></script>
	<script type="text/javascript" src={{ asset('js/idk.js') }}></script>
	<script type="text/javascript" src={{ asset('js/gatau.js') }}></script>
	<script type="text/javascript" src={{ asset('js/wp-emoji-release.min.js') }} defer=""></script>
	<script type="text/javascript" src={{ asset('js/jquery.min.js') }}></script>
	<script type="text/javascript" src={{ asset('js/jquery-migrate.min.js') }} id="jquery-migrate-js"></script>
	
	<!-- CSS Imports -->
	<link rel="stylesheet" id="leto-bootstrap-css" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" id="wp-block-library-css" href="{{ asset('css/style.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" id="wc-block-vendors-style-css" href="{{ asset('css/vendors-style.css') }}" type="text/css" media="all">
	<link rel="stylesheet" id="wc-block-style-css" href="{{ asset('css/style.css') }}" type="text/css" media="all">
	<link rel="stylesheet" id="contact-form-7-css" href="{{ asset('css/styles.css') }}" type="text/css" media="all">
	<link rel="stylesheet" id="siteorigin-panels-front-css" href="{{ asset('css/front-flex.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" id="leto-style-css" href="{{ asset('css/style1.css') }}" type="text/css" media="all">
	<link rel="stylesheet" id="leto-fonts-css" href="{{ asset('css/css') }}" type="text/css" media="all">
	<link rel="stylesheet" id="ionicons-css" href="{{ asset('css/ionicons.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" id="leto-plugins-css-css" href="{{ asset('css/plugins.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('css/chosen.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/button.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/gaya.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/ionicons.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/pb-styles.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/select2.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/slick.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/smiley.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/modal.scss') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/modal.css') }}" type="text/css">
	
	<!-- CSS Style -->
	<noscript>
		<style>
			.woocommerce-product-gallery{
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<style>
		::-webkit-scrollbar {
			width: 6px;
			height: 6px;
		}
		::-webkit-scrollbar-thumb{
			border-radius: 10px;
			background: rgba(0,0,0,0.2);
		}
		::-webkit-scrollbar-thumb:hover{
			background: rgba(0,0,0,0.4);
		}
		::-webkit-scrollbar-thumb:active{
			background: rgba(0,0,0,.9);
		}
		::-webkit-scrollbar-track-piece
		{
			display:none;
		}
	</style>

	@yield('head')
	
</head>
<body class="@yield('body') has-sidebar tidak mobile-inactive">
	<!-- Mobile Menu -->
	<div class="mobile-menu">
		<div class="container-full">
			<!-- Mobile Menu - Navigation -->
			<nav class="mobile-menu__navigation">
				<div class="menu-main-container">
					<ul id="primary-menu" class="menu">
						@if ($request->session()->has('id'))
							<li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97 mb-5">
								<h5>Akun saya</h5>
								<a href="/user/{{$data_user->id}}/{{$data_user->token}}">
									<img src="{{ asset('img/'.$data_user->photo) }}" alt="Foto profil pengguna" class="mr-2" width="20" height="20" style="object-fit: cover;vertical-align: middle;border-radius: 100%;">
									{{ $data_user->name }}
								</a>
							</li>
							<li id="menu-item-94" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94">
								<a href="/">Home</a>
							</li>
							<li id="menu-item-96" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96">
								<a href="/">Buku</a>
							</li>
							<li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
								<a href="/">Lokasi</a>
							</li>
							<li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
								<a href="/logout" class="text-red">Logout</a>
							</li>
						@else
							<li id="menu-item-94" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94">
								<a href="/">Home</a>
							</li>
							<li id="menu-item-96" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96">
								<a href="/">Buku</a>
							</li>
							<li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
								<a href="/">Lokasi</a>
							</li>
							<li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97 mt-6">
								<a href="/login">Login/Register</a>
							</li>
						@endif
					</ul>
				</div>
			</nav>
		</div>
	</div>
	
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<div class="header-floating-trigger">
				<div class="header-navigation header-floating">
					<div class="container-full">
						<div class="site-header__content">
							<!-- Site Branding -->
							<div class="site-branding">
								<div class="site-branding__content">
									<p class="site-title">
										<img src="{{ asset('img/icon.png') }}" alt="Logo Genius" width="30" style="padding-bottom: 10px;">
										<a href="/" rel="home" style="font-family: 'Lemon/Milk';">
											GENIUS
										</a>
									</p>
								</div>
							</div>

							<!-- Site Navigation -->	
							<nav id="site-navigation" class="main-navigation">
								<div class="menu-main-container">
									<ul id="primary-menu" class="menu">
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94">
											<a href="/">Home</a>
										</li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96">
											<a href="#buku">Buku</a>
										</li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
											<a href="#lokasi">Lokasi</a>
										</li>
									</ul>
								</div>
							</nav>

							<!-- Header Mobile Menu -->
							<div class="header-mobile-menu hayolooooo">
								<div class="header-mobile-menu__inner">
									<svg class="ham hamRotate ham4" viewBox="0 0 100 100" width="50" onclick="this.classList.toggle('active')">
										<path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
										<path class="line middle" d="m 70,50 h -40" />
										<path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
									</svg>
								</div>
							</div>

							<script type="text/javascript">
								$(document).ready(function() {
									$('.hayolooooo').click(function(){
										if($('.tidak').hasClass('mobile-inactive')){
											$('.tidak').removeClass('mobile-inactive').addClass('mobile-menu-active');
										} else if($('.tidak').hasClass('mobile-menu-active')){
											$('.tidak').removeClass('mobile-menu-active').addClass('mobile-inactive');
										}
									});
								});
							</script>

							<ul class="nav-link-right">
								<li class="nav-link-account">
									@if ($request->session()->has('id'))
										<img src="{{ asset('img/'.$data_user->photo) }}" alt="Foto profil pengguna" class="mr-3" width="17" height="17" style="object-fit: cover;border-radius: 100%;">
										<a href="/user/{{$data_user->id}}/{{$data_user->token}}">{{ $data_user->name }}</a>
									@else
										<a href="/login" title="Login" style="margin-right: 2rem;">
											<span class="prefix">Login</span>
											<span class="suffix ion-person"></span>
										</a>
										<a href="/register" title="Register">
											<span class="prefix text-sm">Register</span>
											<span class="suffix ion-person"></span>
										</a>
									@endif
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>

		@yield('content')
	
		<!-- Footer -->
		<footer class="text-center text-lg-start bg-light text-muted pt-2">
			<!-- Copyright -->
			<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.09);">
				Copyright © 2021
				<a href="/" style="color: black;">Perpustakaan "Genius"</a>. All Rights Reserved.
			</div>
		</footer>
	</div>

	<script type="text/javascript">
		const buttons = document.querySelectorAll('.trigger[data-modal-trigger]');

		for(let button of buttons) {
			modalEvent(button);
		}

		function modalEvent(button) {
			button.addEventListener('click', () => {
				const trigger = button.getAttribute('data-modal-trigger');
				// console.log('trigger', trigger)
				const modal = document.querySelector(`[data-modal=${trigger}]`);
				// console.log('modal', modal)
				const contentWrapper = modal.querySelector('.content-wrapper');
				const close = modal.querySelector('.close');

				close.addEventListener('click', () => modal.classList.remove('open'));
				modal.addEventListener('click', () => modal.classList.remove('open'));
				contentWrapper.addEventListener('click', (e) => e.stopPropagation());

				modal.classList.toggle('open');
			});
		}
	</script>

	<!-- Script JS -->
	<script type="text/javascript" src={{ asset('js/main-legacy.js') }} id="st-carousel-js"></script>
	<script type="text/javascript" src={{ asset('js/wp-polyfill.min.js') }} id="wp-polyfill-js"></script>
	<script type="text/javascript" src={{ asset('js/index.js') }} id="contact-form-7-js"></script>
	<script type="text/javascript" src={{ asset('js/jquery.blockUI.min.js') }} id="jquery-blockui-js"></script>
	<script type="text/javascript" src={{ asset('js/hooks.min.js') }} id="wp-hooks-js"></script>
	<script type="text/javascript" src={{ asset('js/i18n.min.js') }} id="wp-i18n-js"></script>
	<script type="text/javascript" src={{ asset('js/lodash.min.js') }} id="lodash-js"></script>
	<script type="text/javascript" src={{ asset('js/url.min.js') }} id="wp-url-js"></script>
	<script type="text/javascript" src={{ asset('js/api-fetch.min.js') }} id="wp-api-fetch-js"></script>
	<script type="text/javascript" src={{ asset('js/add-to-cart.min.js') }} id="wc-add-to-cart-js"></script>
	<script type="text/javascript" src={{ asset('js/js.cookie.min.js') }} id="js-cookie-js"></script>
	<script type="text/javascript" src={{ asset('js/woocommerce.min.js') }} id="woocommerce-js"></script>
	<script type="text/javascript" src={{ asset('js/cart-fragments.min.js') }} id="wc-cart-fragments-js"></script>
	<script type="text/javascript" src={{ asset('js/plugins.js') }} id="leto-scripts-js"></script>
	<script type="text/javascript" src={{ asset('js/imagesloaded.min.js') }} id="imagesloaded-js"></script>
	<script type="text/javascript" src={{ asset('js/main.js') }} id="leto-main-js"></script>
	<script type="text/javascript" src={{ asset('js/wp-embed.min.js') }} id="wp-embed-js"></script>
	<script type="text/javascript" src={{ asset('js/styling.min.js') }} id="siteorigin-panels-front-styles-js"></script>
	<script type="text/javascript" src={{ asset('js/chosen.jquery.js') }}></script>
	<script type="text/javascript" src={{ asset('js/chosen.jquery.min.js') }}></script>
	<script type="text/javascript" src={{ asset('js/customizer.js') }}></script>
	<script type="text/javascript" src={{ asset('js/isotope.pkgd.js') }}></script>
	<script type="text/javascript" src={{ asset('js/jquery.fitvids.js') }}></script>
	<script type="text/javascript" src={{ asset('js/jquery.magnific-popup.js') }}></script>
	<script type="text/javascript" src={{ asset('js/main.min.js') }}></script>
	<script type="text/javascript" src={{ asset('js/pb-scripts.js') }}></script>
	<script type="text/javascript" src={{ asset('js/skip-link-focus-fix.js') }}></script>
	<script type="text/javascript" src={{ asset('js/slick.js') }}></script>
	<script type="text/javascript" src={{ asset('js/smiley.js') }}></script>
	<script type="text/javascript" src={{ asset('js/modal.js') }}></script>
	<script type="text/javascript" src={{ asset('js/bootstrap/bootstrap.bundle.min.js') }}></script>
	<script type="text/javascript" src={{ asset('js/bootstrap/bootstrap.esm.min.js') }}></script>
	<script type="text/javascript" src={{ asset('js/bootstrap/bootstrap.min.js') }}></script>
	<script type="text/javascript" src={{ asset('admin/js/argon.min.js') }}></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script> --}}
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	@yield('script')
</body>
</html>