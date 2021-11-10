@extends('layout.user')

@section('title')
    {{$data_buku->judul}}
@endsection

@section('body')
	product-template-default single single-product postid-301 theme-leto woocommerce woocommerce-page woocommerce-js has-sidebar product-layout-1 elementor-default elementor-kit-1331
@endsection

@section('content')
<div id="content" class="site-content">
	<div class="container clearfix mt-5">
		<div class="row">
			<div id="primary" class="content-area col-md-9">
				<main id="main" class="site-main" role="main">
					<div id="product-301" class="product type-product post-301 status-publish first instock product_cat-posters has-post-thumbnail shipping-taxable purchasable product-type-simple">
						<div class="product-detail">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-6 product-images-wrapper has-gallery">
									<center>
										<img width="450" src="{{ asset('img/'.$data_buku->gambar) }}" class="wp-post-image" alt="{{$data_buku->judul}}" loading="lazy" title="{{$data_buku->judul}}" data-large_image_width="768" data-large_image_height="1152" sizes="(max-width: 600px) 100vw, 600px">
									</center>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-1"></div>
								<div class="col-xs-12 col-sm-12 col-md-5 product-detail-summary">
									<div class="summary entry-summary">
										<h3 class="product_title entry-title" style="font-size: 12pt;">{{$data_buku->kategori}}</h3>
										<p class="price">
											<span class="woocommerce-Price-amount amount" style="font-size: 23pt;">
												{{$data_buku->judul}}
											</span>
										</p>
										<p class="price">
											<span style="font-size: 12pt;">{{$data_buku->pengarang}}</span>
										</p>
										<div class="woocommerce-product-details__short-description">
											<p>{{$data_buku->deskripsi}}</p>
										</div>
										<div class="woocommerce-product-details__short-description mb-5">
											Penerbit : <span style="color: black;">{{$data_buku->penerbit}}</span> <br>
											Tanggal Terbit : <span style="color: black;">{{\Carbon\Carbon::parse($data_buku->tgl_terbit)->format('d M Y')}}</span>
										</div>
										<div class="product_meta">
											<span class="sku_wrapper">Kategori: <span class="sku">{{$data_buku->kategori}}</span></span>
											<span class="posted_in">Lokasi Rak: <a href="#" rel="tag">{{$data_buku->rak}}.{{$data_buku->laci}}</a></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						{{-- <div class="woocommerce-tabs wc-tabs-wrapper">
							<ul class="tabs wc-tabs" role="tablist">
								<li class="description_tab active" id="tabir-1" role="tab" aria-controls="tab-1">
									<a href="#deskripsi" id="deskripsi">Deskripsi</a>
								</li>
								<li class="reviews_tab initab" id="tabir-2" role="tab" aria-controls="tab-2">
									<a href="#ukuran" id="ukuran">Ukuran</a>
								</li>
							</ul>
							<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-1" role="tabpanel" aria-labelledby="tab-1" style="">
								<h2>Deskripsi</h2>
								<p>
									@php
										echo $data_produk->desc;
									@endphp
								</p>
							</div>
							<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-2" role="tabpanel" aria-labelledby="tab-2" style="display: none;">
								<div class="woocommerce-Reviews">
									<h2 class="woocommerce-Reviews-title">Size Chart</h2>
									<table class="table table-bordered text-center" style="width: 22rem;">
										<thead>
											<tr>
												<th style="text-align: center;">Ukuran</th>
												@if ($data_produk->kategori == "hoodie" || $data_produk->kategori == "sweatshirt" || $data_produk->kategori == "t-shirt")
												<th style="text-align: center;">LD &times; PB (cm)</th>
												@endif
												@if ($data_produk->kategori == "aksesoris")
												<th style="text-align: center;">Panjang &times; Lebar (cm)</th>
												@endif
											</tr>
										</thead>
										<tbody>
											@foreach ($data_prodetail as $dpr)
											<tr>
												<td>{{$dpr->ukuran}}</td>
												<td>{{$dpr->ld}} &times; {{$dpr->pb}}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
									@if ($data_produk->kategori == "hoodie" || $data_produk->kategori == "sweatshirt" || $data_produk->kategori == "t-shirt")
									<p>
										Keterangan : <br>
										LD = Lingkar Dada <br>
										PB = Panjang Baju
									</p>
									@endif
									{{-- <div id="comments">
										<h2 class="woocommerce-Reviews-title">Reviews</h2>
										<ol class="commentlist">
											<li class="review even thread-even depth-1" id="li-comment-1437">
												<div id="comment-1437" class="comment_container">
													<img alt="" src="./Leto - Detail Produk_files/dc5bc835b95b396d9ec678a8c2f7d324.png" srcset="https://secure.gravatar.com/avatar/dc5bc835b95b396d9ec678a8c2f7d324?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60" loading="lazy">
													<div class="comment-text">
														<div class="star-rating" role="img" aria-label="Rated 5 out of 5">
															<span style="width:100%">Rated <strong class="rating">5</strong> out of 5</span>
														</div>
														<p class="meta">
															<em class="woocommerce-review__awaiting-approval">Your review is awaiting approval</em>
														</p>
														<div class="description"><p>wow</p></div>
													</div>
												</div>
											</li>
										</ol>
									</div> --}}
									{{-- <div id="review_form_wrapper">
										<div id="review_form">
											<div id="respond" class="comment-respond">
												<span id="reply-title" class="comment-reply-title">Add a review <small><a rel="nofollow" id="cancel-comment-reply-link" href="https://demo.athemes.com/leto/product/ship-your-idea/#respond" style="display:none;">Cancel reply</a></small></span>
												<form action="https://demo.athemes.com/leto/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
													<p class="comment-notes">
														<span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
													</p>
													<div class="comment-form-rating">
														<label for="rating">Your rating&nbsp;<span class="required">*</span></label>
														<p class="stars">
															<span>
																<a class="star-1" href="https://demo.athemes.com/leto/product/ship-your-idea/#">1</a>
																<a class="star-2" href="https://demo.athemes.com/leto/product/ship-your-idea/#">2</a>
																<a class="star-3" href="https://demo.athemes.com/leto/product/ship-your-idea/#">3</a>
																<a class="star-4" href="https://demo.athemes.com/leto/product/ship-your-idea/#">4</a>
																<a class="star-5" href="https://demo.athemes.com/leto/product/ship-your-idea/#">5</a>
															</span>
														</p>
														<select name="rating" id="rating" required="" style="display: none;">
															<option value="">Rate…</option>
															<option value="5">Perfect</option>
															<option value="4">Good</option>
															<option value="3">Average</option>
															<option value="2">Not that bad</option>
															<option value="1">Very poor</option>
														</select>
													</div>
													<p class="comment-form-comment">
														<label for="comment">Your review&nbsp;<span class="required">*</span></label>
														<textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
													</p>
													<p class="comment-form-author">
														<label for="author">Name&nbsp;<span class="required">*</span></label>
														<input id="author" name="author" type="text" value="yyy ddd" size="30" required="">
													</p>
													<p class="comment-form-email">
														<label for="email">Email&nbsp;<span class="required">*</span></label>
														<input id="email" name="email" type="email" value="rrrrr@gmail.com" size="30" required="">
													</p>
													<p class="comment-form-cookies-consent">
														<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" checked="checked">
														<label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
													</p>
													<p class="form-submit">
														<input name="submit" type="submit" id="submit" class="submit" value="Submit">
														<input type="hidden" name="comment_post_ID" value="301" id="comment_post_ID">
														<input type="hidden" name="comment_parent" id="comment_parent" value="0">
													</p>
													<input type="hidden" id="ak_js" name="ak_js" value="66">
													<textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100" style="display: none !important;"></textarea>
												</form>
											</div>
										</div>
									</div>
									<div class="clear"></div> --}}
								</div>
							</div>
						</div>
					</div>
				</main>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
	<script type="text/javascript" src={{ asset('js/tab.js') }}></script>
@endsection