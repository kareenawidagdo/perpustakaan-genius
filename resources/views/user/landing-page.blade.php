@extends('layout.user')

@section('title')
	Perpustakaan "Genius"
@endsection

@section('body')
	home page-template page-template-page-templates page-template-template_page-builder page-template-page-templatestemplate_page-builder-php page page-id-231 theme-leto siteorigin-panels siteorigin-panels-home woocommerce-js elementor-default elementor-kit-1331 has-hero
@endsection

@section('content')

<div class="hero-area">
	<div id="wp-custom-header" class="wp-custom-header">
		<img src="{{ asset('img/header.png') }}" width="1920" height="88vh" alt="Perpustakaan Genius">
	</div>
</div>

<div id="content" class="site-content">
	<div class="container clearfix">
		<div class="row">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<div id="pl-231" class="panel-layout">
						<div id="pg-231-0" class="panel-grid panel-has-style">
							<div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-231-0" data-stretch-type="full" style="margin-left: -174.6px; margin-right: -174.6px; padding-left: 174.6px; padding-right: 174.6px; border-left: 0px; border-right: 0px;"><div id="pgc-231-0-0" class="panel-grid-cell">
								<div id="panel-231-0-0-0" class="so-panel widget widget_leto_facts leto_facts_widget panel-first-child panel-last-child" data-index="0">
									<div class="featured-box-section">
										<div class="row">
											<div class="featured-box-item">
												<div class="featured-box-item__inner">
													<div class="featured-box-icon">
														<ion-icon name="library-outline"></ion-icon>
													</div>
													<div class="featured-box__info">
														<div class="featured-box-title">
															Terlengkap
														</div>
														<div class="featured-box-desc">
															Koleksi buku terlengkap
														</div>
													</div>
												</div>
											</div>
											<div class="featured-box-item">
												<div class="featured-box-item__inner">
													<div class="featured-box-icon">
														<ion-icon name="leaf-outline"></ion-icon>
													</div>
													<div class="featured-box__info">
														<div class="featured-box-title">
															Nyaman
														</div>
														<div class="featured-box-desc">
															Perpustakaan nyaman
														</div>
													</div>
												</div>
											</div>
											<div class="featured-box-item">
												<div class="featured-box-item__inner">
													<div class="featured-box-icon">
														<ion-icon name="checkmark-outline"></ion-icon>
													</div>
													<div class="featured-box__info">
														<div class="featured-box-title">
															Bebas Denda
														</div>
														<div class="featured-box-desc">
															Tidak ada denda
														</div>
													</div>
												</div>
											</div>
											<div class="featured-box-item">
												<div class="featured-box-item__inner">
													<div class="featured-box-icon">
														<ion-icon name="book-outline"></ion-icon>
													</div>
													<div class="featured-box__info">
														<div class="featured-box-title">
															Bebas Pinjam
														</div>
														<div class="featured-box-desc">
															Bisa pinjam banyak buku
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="pg-231-1" class="panel-grid panel-has-style mt-7">
						<div class="panel-row-style panel-row-style-for-231-1" id="buku">
							<div id="pgc-231-1-0" class="panel-grid-cell">
								<div id="panel-231-1-0-0" class="so-panel widget widget_leto_product_loop leto_product_loop panel-first-child panel-last-child" data-index="1">
									<h2 class="title-heading text-center">DAFTAR BUKU</h2>
									<div class="best-seller-section wrap-grid">
										<ul class="best-seller-categories">
											<li class="active"><a href="#" data-filter="*">Semua</a></li>
											<li><a href="#" data-filter=".Non-Fiksi">Non Fiksi</a></li>
											<li><a href="#" data-filter=".Romantis">Romantis</a></li>
											<li><a href="#" data-filter=".Drama">Drama</a></li>
											<li><a href="#" data-filter=".Komedi">Komedi</a></li>
											<li><a href="#" data-filter=".Fantasi">Fantasi</a></li>
											<li><a href="#" data-filter=".Action">Action</a></li>
											<li><a href="#" data-filter=".Misteri">Misteri</a></li>
											<li><a href="#" data-filter=".Horror">Horror</a></li>
										</ul>
										<input type="text" class="input-text mt--7 mb-5" placeholder="Cari buku . . ." style="width: 100%;" id="cari-buku">
										<div class="woocommerce best-seller-products products grid" style="position: relative; height: 877.6px;">
											@foreach ($data_buku as $row)
											<div class="col-xs-6 col-sm-6 col-md-3 product {{$row->kategori}} hoodies " style="position: absolute; left: 0%; top: 0px;"> 
												<div class="product-inner">
													<div class="product-thumb">
														<a href="/detail/{{$row->link}}" >
															<img width="300" height="300" src="{{ asset('img/'.$row->gambar) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{$row->nama_produk}}" loading="lazy" sizes="(max-width: 300px) 100vw, 300px" style="object-fit: cover;">
														</a>
													</div>
													<div class="product-details">
														<h2 class="product-title">
															<a href="/detail/{{$row->link}}">{{$row->judul}}</a>
														</h2>
														<div class="product-price-button">
															<span class="product-price">
																<p class="price">
																	<span class="woocommerce-Price-amount amount">
																		{{$row->pengarang}}
																	</span>
																</p>
															</span>
															<div class="product-button">
																<a href="/detail/{{$row->link}}">Lihat detail</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="pg-231-3" class="panel-grid panel-has-style mb-5 col">
						<div class="panel-row-style panel-row-style-for-231-3" id="lokasi">
							<div id="pgc-231-3-0" class="panel-grid-cell">
								<div id="panel-231-3-0-0" class="so-panel widget widget_text panel-first-child" data-index="3">
									<div class="panel-widget-style panel-widget-style-for-231-3-0-0">
										<h2 class="title-heading text-center">LOKASI</h2>
										<div class="textwidget">
											<p style="text-align:center;font-size: 12pt;">Yuk mampir ke Perpustakaan "Genius"! Dijamin betah membaca disini.</p>
										</div>
										<center>
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15243173.93844628!2d70.62742590192622!3d21.133366985620846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5269d63e997%3A0xb62baf861196e4b9!2sGenius%20Library!5e0!3m2!1sid!2sid!4v1636350843586!5m2!1sid!2sid" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
										</center>
									</div>
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

<script>
    $(document).ready(function(){
        $("#cari-buku").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".best-seller-products .hoodies").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection