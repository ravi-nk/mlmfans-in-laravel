<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_4/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jan 2021 06:27:30 GMT -->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Porto - Bootstrap eCommerce Template</title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Porto - Bootstrap eCommerce Template">
	<meta name="author" content="SW-THEMES">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="user/assets/images/icons/favicon.ico">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />


	<script type="text/javascript">
		WebFontConfig = {
			google: {
				families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Shadows+Into+Light:400']
			}
		};
		(function(d) {
			var wf = d.createElement('script'),
				s = d.scripts[0];
			wf.src = 'user/assets/js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>

	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css')}}">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="{{ asset('user/assets/css/style.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('user/assets/vendor/fontawesome-free/css/all.min.css')}}">

</head>

<body>
	@php
	$site_data = array("title" => "MLM DIARY", "subtitle" => "", "phone" => "", "email" => "", "address" => "", "logo" => "assets/logo.png");
	foreach(App\setting::get() as $data) {
	if ($data['name'] == 'title')
	$site_data['title'] = $data['value'];
	if ($data['name'] == 'subtitle')
	$site_data['subtitle'] = $data['value'];
	if ($data['name'] == 'phone')
	$site_data['phone'] = $data['value'];
	if ($data['name'] == 'email')
	$site_data['email'] = $data['value'];
	if ($data['name'] == 'address')
	$site_data['address'] = $data['value'];
	if ($data['name'] == 'logo')
	$site_data['logo'] = $data['value'];
	}
	@endphp
	<div class="page-wrapper">
		
		<header class="header">
			<div class="header-top">
				<div class="container">
					{{-- <div class="header-left">
						<p class="top-message ls-0 text-uppercase text-white d-none d-sm-block">FREE Returns. Standard Shipping Orders $99+</p>
					</div><!-- End .header-left --> --}}

					<div class="header-right header-dropdowns w-sm-100">
						{{-- <div class="header-dropdown dropdown-expanded d-none d-lg-block mr-4">
							<a href="#">Links</a>
							<div class="header-menu">
								<ul>
									<li><a href="my-account.html">Track Order </a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="category.html">Our Stores</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="#">Help &amp; FAQs</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown --> --}}

						<span class="separator"></span>

						<div class="header-dropdown">
							<a href="#">USD</a>
							<div class="header-menu">
								<ul>
									<li><a href="#">EUR</a></li>
									<li><a href="#">USD</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
							<a href="#"><img src="{{asset('user/assets/images/flags/en.png')}}" alt="England flag">ENG</a>
							<div class="header-menu">
								<ul>
									<li><a href="#"><img src="{{asset('user/assets/images/flags/en.png')}}" alt="England flag">ENG</a></li>
									<li><a href="#"><img src="{{asset('user/assets/images/flags/fr.png')}}" alt="France flag">FRA</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<span class="separator"></span>

						<div class="social-icons">
							<a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
							<a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
							<a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
						</div><!-- End .social-icons -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-top -->

			<div class="header-middle">
				<div class="container">
					<div class="header-left col-lg-2 w-auto pl-0">
						<button class="mobile-menu-toggler mr-2" type="button">
							<i class="icon-menu"></i>
						</button>
						<a href="index-2.html" class="logo">
							{{-- <img src="{{asset('user/assets/images/logo.png')}}" alt="Porto Logo"> --}}
							<h3 class="text-white">MLMFans</h3>
						</a>
					</div><!-- End .header-left -->

					<div class="header-right w-lg-max ml-0">
						<div class="header-icon header-search header-search-inline header-search-category w-lg-max pl-3">
							<a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
							<form action="#" method="get">
								<div class="header-search-wrapper">
									<input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
									<div class="select-custom">
										<select id="cat" name="cat">
											<option value="">All Categories</option>
											<option value="4">Fashion</option>
											<option value="12">- Women</option>
											<option value="13">- Men</option>
											<option value="66">- Jewellery</option>
											<option value="67">- Kids Fashion</option>
											<option value="5">Electronics</option>
											<option value="21">- Smart TVs</option>
											<option value="22">- Cameras</option>
											<option value="63">- Games</option>
											<option value="7">Home &amp; Garden</option>
											<option value="11">Motors</option>
											<option value="31">- Cars and Trucks</option>
											<option value="32">- Motorcycles &amp; Powersports</option>
											<option value="33">- Parts &amp; Accessories</option>
											<option value="34">- Boats</option>
											<option value="57">- Auto Tools &amp; Supplies</option>
										</select>
									</div><!-- End .select-custom -->
									<button class="btn icon-search-3" type="submit"></button>
								</div><!-- End .header-search-wrapper -->
							</form>
						</div><!-- End .header-search -->

						<div class="header-contact d-none d-lg-flex pl-4 ml-3 mr-xl-5 pr-4">
							<img alt="phone" src="{{asset('user/assets/images/phone.png')}}" width="30" height="30" class="pb-1">

							<h6>Call us now<a href="tel:#" class="font1">{{$site_data['phone']}}</a></h6>
						</div>

						<div class="dropdown cart-dropdown">
							<a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
								<i class="icon-user-2"></i>
							</a><br>
							@if(Auth::check())
							{{Auth::user()->name}} 
							@endif

							<div class="dropdown-menu" style="max-width:150px;">
								<div class="dropdownmenu-wrapper">
									<div class="dropdown-cart-header">
										@if(!Auth::user())
										<a href="{{route('login')}}">Login</a>
										<a href="{{route('register')}}">Register</a>
										@else
										
										<a href="{{route('user.addpost')}}">Add Post</a>
										<a href="{{route('user.downline')}}">Downline</a>
										<a href="{{route('user.addUserPost')}}">Add UserPost</a>
										<div style="border:1px solid grey"></div>
										<a href="#">Profile</a><br>
										<a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
										@endif
									</div>
								</div><!-- End .dropdownmenu-wrapper -->
							</div><!-- End .dropdown-menu -->
						</div><!-- End .dropdown -->
						@if(Auth::check())
						<div>
							@php
							$total = App\wallet::where('userid',Auth::user()->id)->get();
							$total = $total->sum('amount');
							
							@endphp
						<a href="#" class="pl-3 "><i class="fa fa-wallet pr-2"></i>${{$total}}</a>
					</div>
					@endif
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-middle -->

			<div class="header-bottom sticky-header d-none d-lg-block">
				<div class="container">
					<nav class="main-nav w-100">
						<ul class="menu">
							<li>
								<a href="{{route('index')}}">Home</a>
							</li>
							@if(Auth::check())
							@if(Auth::user()->is_showlist == 1)
							<li>
								<a href="{{route('user.member')}}">Members</a>
							</li>
							@endif
							@endif

							<li>
								<a href="{{route('user.clasifiedAd')}}">Classified Add</a>
							</li>
							@if(Auth::check())
							<li>
								<a href="{{route('user.adsPackage')}}"> AddsPackage</a>
							</li>
							@endif
						
							@if(auth::check())
							<li><a href="{{route('user.userPost')}}">Users Post</a></li>
							@endif
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact Us</a></li>


							<form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
								@csrf
							</form>

							<li class="float-right"><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
							<li class="float-right"><a href="#">Special Offer!</a></li>
						</ul>
					</nav>
				</div><!-- End .container -->
			</div><!-- End .header-bottom -->
		</header><!-- End .header -->

		<main class="py-4">
			@yield('content')
		</main>


		<footer class="footer bg-dark">
			<div class="footer-middle">
				<div class="container">
					<div class="footer-ribbon bg-primary text-white ls-10">
						Get in touch
					</div><!-- End .footer-ribbon -->
					<div class="row">
						<div class="col-lg-3 col-md-4">
							<div class="widget">
								<h4 class="widget-title">Contact Info</h4>
								<ul class="contact-info">
									<li>
										<span class="contact-info-label">Address</span>{{$site_data['address']}}
									</li>
									<li>
										<span class="contact-info-label">Phone</span>Toll Free <a href="tel:">{{$site_data['phone']}}</a>
									</li>
									<li>
										<span class="contact-info-label">Email</span> <a href="mailto:mail@example.com">{{$site_data['email']}}</a>
									</li>
									<li>
										<span class="contact-info-label">Working Days/Hours</span>
										Mon - Sun / 9:00AM - 8:00 PM
									</li>
								</ul>
								<div class="social-icons">
									<a href="#" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
									<a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
									<a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
								</div><!-- End .social-icons -->
							</div><!-- End .widget -->
						</div><!-- End .col-lg-3 -->

						<div class="col-lg-9 col-md-8">
							<div class="widget widget-newsletter">
								<h4 class="widget-title">Subscribe newsletter</h4>
								<div class="row">
									<div class="col-lg-6 col-md-12">
										<p>Get all the latest information on Events, Sales and Offers. Sign up for newsletter today</p>
									</div><!-- End .col-lg-6 -->

									<div class="col-lg-6 col-md-12">
										<form action="#" class="d-flex mb-0 w-100">
											<input type="email" class="form-control mb-0" placeholder="Email address" required>

											<input type="submit" class="btn btn-primary shadow-none" value="Subscribe">
										</form>
									</div><!-- End .col-lg-6 -->
								</div><!-- End .row -->
							</div><!-- End .widget -->

							<div class="row">
								<div class="col-sm-6">
									<div class="widget">
										<h4 class="widget-title">Customer Service</h4>

										<ul class="links link-parts row mb-0">
											<div class="link-part col-lg-6 col-md-12">
												<li><a href="#">Help & FAQs</a></li>
												<li><a href="#">Order Tracking</a></li>
												<li><a href="#">Shipping & Delivery</a></li>
											</div>
											<div class="link-part col-lg-6 col-md-12">
												<li><a href="#">Orders History</a></li>
												<li><a href="#">Advanced Search</a></li>
												<li><a href="#" class="login-link">Login</a></li>
											</div>
										</ul>
									</div><!-- End .widget -->
								</div><!-- End .col-sm-6 -->

								<div class="col-sm-6">
									<div class="widget">
										<h4 class="widget-title">About Us</h4>

										<ul class="links link-parts row mb-0">
											<div class="link-part col-lg-6 col-md-12">
												<li><a href="about.html">About Us</a></li>
												<li><a href="#">Corporate Sales</a></li>
												<li><a href="#">Careers</a></li>
											</div>
											<div class="link-part col-lg-6 col-md-12">
												<li><a href="#">Community</a></li>
												<li><a href="#">Investor Relations</a></li>
											</div>
										</ul>
									</div><!-- End .widget -->
								</div><!-- End .col-sm-6 -->
							</div><!-- End .row -->
						</div><!-- End .col-lg-9 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .footer-middle -->

			<div class="container">
				<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
					<p class="footer-copyright py-3 pr-4 mb-0">&copy; Porto eCommerce. 2020. All Rights Reserved</p>

					<img src="{{asset('user/assets/images/payments.png')}}" alt="payment methods" class="footer-payments py-3">
				</div><!-- End .footer-bottom -->
			</div><!-- End .container -->
		</footer><!-- End .footer -->
	</div><!-- End .page-wrapper -->

	<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

	<div class="mobile-menu-container">
		<div class="mobile-menu-wrapper">
			<span class="mobile-menu-close"><i class="icon-cancel"></i></span>
			<nav class="mobile-nav">
				<ul class="mobile-menu mb-3">
					<li class="active"><a href="index-2.html">Home</a></li>
					<li>
						<a href="category.html">Categories<span class="tip tip-new">New</span></a>
						<ul>
							<li><a href="https://www.portotheme.com/html/porto_ecommerce/demo_4/category-banner-full-width.html">Full Width Banner</a></li>
							<li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
							<li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
							<li><a href="https://www.portotheme.com/html/porto_ecommerce/demo_4/category-sidebar-left.html">Left Sidebar</a></li>
							<li><a href="category-sidebar-right.html">Right Sidebar</a></li>
							<li><a href="category-flex-grid.html">Product Flex Grid</a></li>
							<li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
							<li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
							<li><a href="#">List Types</a></li>
							<li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
							<li><a href="category.html">3 Columns Products</a></li>
							<li><a href="category-4col.html">4 Columns Products</a></li>
							<li><a href="category-5col.html">5 Columns Products</a></li>
							<li><a href="category-6col.html">6 Columns Products</a></li>
							<li><a href="category-7col.html">7 Columns Products</a></li>
							<li><a href="category-8col.html">8 Columns Products</a></li>
						</ul>
					</li>
					<li>
						<a href="product.html">Products</a>
						<ul>
							<li>
								<a href="#">Variations</a>
								<ul>
									<li><a href="product.html">Horizontal Thumbs</a></li>
									<li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
									<li><a href="product.html">Inner Zoom</a></li>
									<li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
									<li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Variations</a>
								<ul>
									<li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
									<li><a href="product-simple.html">Simple Product</a></li>
									<li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Product Layout Types</a>
								<ul>
									<li><a href="product.html">Default Layout</a></li>
									<li><a href="product-extended-layout.html">Extended Layout</a></li>
									<li><a href="product-full-width.html">Full Width Layout</a></li>
									<li><a href="product-grid-layout.html">Grid Images Layout</a></li>
									<li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
									<li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
						<ul>
							<li><a href="cart.html">Shopping Cart</a></li>
							<li>
								<a href="#">Checkout</a>
								<ul>
									<li><a href="checkout-shipping.html">Checkout Shipping</a></li>
									<li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
									<li><a href="checkout-review.html">Checkout Review</a></li>
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li><a href="#" class="login-link">Login</a></li>
							<li><a href="forgot-password.html">Forgot Password</a></li>
						</ul>
					</li>
					<li><a href="blog.html">Blog</a>
						<ul>
							<li><a href="single.html">Blog Post</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact Us</a></li>
					<li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
					<li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
				</ul>

				<ul class="mobile-menu">
					<li><a href="my-account.html">Track Order </a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="category.html">Our Stores</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="#">Help &amp; FAQs</a></li>
				</ul>
			</nav><!-- End .mobile-nav -->

			<div class="social-icons">
				<a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
				<a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
				<a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
			</div><!-- End .social-icons -->
		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->

	<!-- <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url(assets/images/newsletter_popup_bg.jpg)">
		<div class="newsletter-popup-content">
			<img src="{{asset('user/assets/images/logo-black.png')}}" alt="Logo" class="logo-newsletter">
			<h2>BE THE FIRST TO KNOW</h2>
			<p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
			<form action="#">
				<div class="input-group">
					<input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
					<input type="submit" class="btn" value="Go!">
				</div>
			</form>
			<div class="newsletter-subscribe">
				<div class="checkbox">
					<label>
						<input type="checkbox" value="1">
						Don't show this popup again
					</label>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Add Cart Modal -->
	<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body add-cart-box text-center">
					<p>You've just added this product to the<br>cart:</p>
					<h4 id="productTitle"></h4>
					<img src="#" id="productImage" width="100" height="100" alt="adding cart image">
					<div class="btn-actions">
						<a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
						<a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

	<!-- Plugins JS File -->
	<script src="{{asset('user/assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('user/assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('user/assets/js/optional/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('user/assets/js/plugins.min.js')}}"></script>

	<!-- Main JS File -->
	<script src="{{asset('user/assets/js/main.min.js')}}"></script>

	<script src="{{asset('dist/js/jquery.scrolla.min.js')}}"></script>
	<script src="{{ asset('js/share.js') }}"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

	<script>
		$(document).ready(function() {
			// $('.animate').scrolla();


			$('.animate').scrolla({
				mobile: false, 
				once: false,
				animateCssVersion: 4, 
				animate: "bounceIn"
			});
			$('.animate').attr({
				"data-animate": "bounceIn",
				"data-duration": "1s",
				"data-delay": "0.1s",
				"data-offset": "40",
				"data-iteration": "1"
			}).css("min-height", "70px");

			$('.dayselect').selectpicker({
				noneSelectedText:'Select Days',
				maxOptions: 7,
				liveSearch: false,
				showContent: true,
			});
			$('.mnthselect').selectpicker({
				noneSelectedText:'Select Month',
				maxOptions: 7,
				liveSearch: false,
				showContent: true,
			});
			$('.yearselect').selectpicker({
				noneSelectedText:'Select Year',
				maxOptions: 7,
				liveSearch: false,
				showContent: true,
			});
			$('.dayselect').change(function() {
				var count = $(".dayselect :selected").length;
				$('#totaldates').html(count);
				var dateamt = $('#dateamt').html();
				var total = dateamt * count;
				$('#totalamt').html(total);
				$('#amt').val(total);
			});
										
		});
	</script>
</body>


</html>