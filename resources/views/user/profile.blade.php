@extends('layout.user')

@section('title','Profil saya')

@section('body')
	product-template-default single single-product postid-301 theme-leto woocommerce woocommerce-page woocommerce-js has-sidebar product-layout-1 elementor-default elementor-kit-1331
@endsection

@section('content')
<div class="jarak"></div>
<div id="content" class="site-content">
	<div class="container clearfix">
		<div class="row">
			<div id="primary" class="content-area col-md-9">
				<main id="main" class="site-main" role="main">
					<div class="woocommerce-notices-wrapper"></div>
					<div id="product-301" class="product type-product post-301 status-publish first instock product_cat-posters has-post-thumbnail shipping-taxable purchasable product-type-simple">
						<div class="product-detail">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-6">
									<a href="/logout">
										<acronym title="Log out" style="cursor: pointer;">
											<span class="logout"><ion-icon name="log-out-outline"></ion-icon></span>
										</acronym>
									</a>
									<center>
										<div class="card card-shadow">
											<div class="card-body">
												<acronym title="Edit Foto Profil" style="cursor: pointer;">
													<a onclick="document.getElementById('modalProfil').style.display='block'">
														<img src="{{ asset('img/'.$data_user->photo) }}" alt="Profil Pengguna" style="width: 250px;height: 250px;border-radius: 100%;object-fit: cover;" class="mt-4">
													</a>
												</acronym>
												<h2 class="text-bold" style="font-family: Calibri;">{{$data_user->name}}</h2>
												<p>{{$data_user->email}}</p>
												<blockquote class="member">{{$data_user->member}}</blockquote>
											</div>
										</div>
									</center>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-1"></div>
								<div class="col-xs-12 col-sm-12 col-md-5 product-detail-summary">
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
									<div class="summary entry-summary">
										<h1 class="product_title entry-title">Edit Profil</h1><hr>
										<form action="/user/{{$data_user->id}}/{{$data_user->token}}/edit" method="POST" enctype="multipart/form-data">
											@csrf
											<p>
												<label for="nama" class="">Nama</label><br>
												<span class="woocommerce-input-wrapper">
													<input type="text" class="input-text form-control" name="nama" id="nama" value="{{$data_user->name}}" autocomplete="name">
												</span>
											</p>
											<p>
												<label for="email" class="">Email</label><br>
												<span class="woocommerce-input-wrapper">
													<input type="text" class="input-text form-control" name="email" id="email" value="{{$data_user->email}}" disabled>
												</span>
											</p>
											<p>
												<label for="hp" class="">No. HP/WA &nbsp;(aktif)</label><br>
												<span class="woocommerce-input-wrapper">
													<input type="text" class="input-text form-control" name="hp" id="hp" placeholder="" value="{{$data_user->phone}}" autocomplete="tel">
												</span>
											</p>
											<p>
												<label for="alamat" class="">Alamat</label><br>
												<span class="woocommerce-input-wrapper">
													<textarea name="alamat" id="alamat" rows="3">{{$data_user->address}}</textarea>
												</span>
											</p>
											<button type="submit" name="add-to-cart" value="301" class="single_add_to_cart_button button alt btn-block">Simpan</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</main>
			</div>
		</div>
	</div>
</div>

<!-- Foto Profil Modal -->
<div id="modalProfil" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
        <header class="w3-container"> 
            <span onclick="document.getElementById('modalProfil').style.display='none'" class="w3-button w3-display-topright" style="font-size: 15pt;">&times;</span>
			&nbsp;
        </header>
        <div class="w3-container">
			<center>
				<hr>
				<a href="#lihat" onclick="document.getElementById('modalLihat').style.display='block';document.getElementById('modalProfil').style.display='none';">Lihat Foto Profil</a><br>
				<hr class="mt-4">
				<a href="#ganti"><label for="gantiProfil">Ganti Foto Profil</label></a><br>
				<hr class="mt-4">
				<a href="/user/profil/hapus/{{$data_user->id}}">Hapus Foto Profil</a><br>
				<hr class="mt-4">
			</center>
        </div>
        <footer class="w3-container"></footer>
    </div>
</div>

<div style="display: none;">
	<form action="/user/profil/edit/{{$data_user->id}}" method="POST" enctype="multipart/form-data" id="form">
	@csrf
	<input type="file" name="foto" id="gantiProfil">
	</form>
	<script>
		document.getElementById("gantiProfil").onchange = function() {
			document.getElementById("form").submit();
		};
	</script>
</div>

<!-- Foto Profil Modal -->
<div id="modalLihat" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
        <header class="w3-container"> 
            <span onclick="document.getElementById('modalLihat').style.display='none'" class="w3-button w3-display-topright" style="font-size: 15pt;">&times;</span>
			&nbsp;
        </header>
        <div class="w3-container">
			<center>
				<img src="{{ asset('img/'.$data_user->photo) }}" alt="{{$data_user->name}}" width="300">
			</center>
        </div>
        <footer class="w3-container"></footer>
    </div>
</div>
@endsection

@section('script')
	<script type="text/javascript" src={{ asset('js/tab.js') }}></script>
@endsection