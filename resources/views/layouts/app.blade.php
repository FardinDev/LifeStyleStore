<!DOCTYPE html>
<html lang="en">
<head>
    <title>Store-@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/themify/themify-icons.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/elegant-font/html-css/style.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
<!--===============================================================================================-->
</head>


	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">

                  <span class="m-text12">A demo website by Fardin</span>
					
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						koushikfardin@gmail.com
					</span>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="/" class="logo">
					<img src="{{asset('images/icons/logo.png')}}" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="/">Home</a>
								
							</li>

							<li>
                                <a href="{{route('products')}}">Shop</a>
                                <ul class="sub_menu">
										@foreach ($cats as $cat)
										<li class="p-t-4">
												<a href="{{route('products', ['cat'=> $cat->slug])}}" class="s-text13">
													{{$cat->name}}
												</a>
											</li>
										@endforeach
								</ul>
							</li>

							<li class="sale-noti">
								<a href="{{route('products')}}">On Sale</a>
							</li>

							<li>
								<a href="{{route('cart')}}">Features</a>
							</li>

							<li>
								<a href="blog.html">Blog</a>
							</li>

							<li>
								<a href="{{route('about')}}">About</a>
							</li>

							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div id="header">
				<div class="header-icons">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="{{asset('images/icons/icon-header-01.png')}}" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="{{asset('images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">
							
						<span id="count">{{Cart::count()}}</span>
						</span>
						<div class="header-cart header-dropdown" id="header-cart">
					 @if(Cart::count()==0)  

						 
								<center>

										<span class="m-text12 text-center">Your Cart Is Empty</span>

										<br>
										<br>

										<div class="size12 trans-0-4">
											<!-- Button -->
											<a href="{{route('products')}}">
											<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
												Go shopping
											</button>
											</a>
										</div>
										
									</center>
						</div>
						


						@else  
						<!-- Header cart noti -->
						
							<ul class="header-cart-wrapitem">

							@foreach(Cart::content() as $item)
								<li class="header-cart-item">
										<a href="{{route('products.show', $item->name)}}">
									<div class="header-cart-item-img">
										<img src="{{ asset('storage/'.$item->model->img) }}" alt="IMG">
									</div>
										</a>
									<div class="header-cart-item-txt">
										<a href="{{route('products.show', $item->name)}}" class="header-cart-item-name">
											{{$item->name}}
										</a>

										<span class="header-cart-item-info">
											{{$item->qty}} x ৳ {{$item->price}} = ৳ {{$item->qty*$item->price}}
										</span>
									</div>
								</li>

							@endforeach

								
							</ul>

							<div class="header-cart-total">
								Total: ৳{{Cart::subtotal()}}
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('cart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
						 @endif 
					</div>
				</div>
			</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="/" class="logo-mobile">
				<img src="{{asset('images/icons/logo.png')}}" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">


				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="{{asset('images/icons/icon-header-01.png')}}" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="{{asset('images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">
							<span id="countm">{{Cart::count()}}</span>
							
						
						</span>
						<div class="header-cart header-dropdown" id="header-cartm">
						@if(Cart::count()==0)

						
								<center>

										<span class="m-text12 text-center">Your Cart Is Empty</span>

										<br>
										<br>

										<div class="size12 trans-0-4">
											<!-- Button -->
											<a href="{{route('products')}}">
											<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
												Go shopping
											</button>
											</a>
										</div>
										
									</center>
						</div>


						@else
							<ul class="header-cart-wrapitem">

							@foreach(Cart::content() as $item)
								<li class="header-cart-item">
										<a href="{{route('products.show', $item->name)}}">
									<div class="header-cart-item-img">
										<img src="{{ asset('storage/'.$item->model->img) }}" alt="IMG">
									</div>
										</a>
									<div class="header-cart-item-txt">
										<a href="{{route('products.show', $item->name)}}" class="header-cart-item-name">
											{{$item->name}}
										</a>

										<span class="header-cart-item-info">
											{{$item->qty}} x ৳ {{$item->price}} = ৳ {{$item->qty*$item->price}}
										</span>
									</div>
								</li>

							@endforeach
		
							</ul>

							<div class="header-cart-total">
								Total: ৳{{Cart::subtotal()}}
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('cart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
						@endif
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							<span class="m-text12">A demo website by Fardin</span>
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								koushikfardin@gmail.com
							</span>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="/">Home</a>
					</li>

					<li class="item-menu-mobile">
						<a href="{{route('products')}}">Shop</a>
                                <ul class="sub-menu">
										@foreach ($cats as $cat)
										<li class="p-t-4">
												<a href="{{route('products', ['cat'=> $cat->slug])}}" class="s-text13">
													{{$cat->name}}
												</a>
											</li>
										@endforeach
								</ul>
								<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="{{route('products')}}">On Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="{{route('cart')}}">Features</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.html">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="{{route('about')}}">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>


    <body class="animsition">

        @yield('content')

    <!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Any questions? Let me know. call me on <a href="#" class="s-text7"> (+88) 01795 514777</a>
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categories
				</h4>

				<ul>
					@foreach ($cats as $cat)
					<li class="p-b-9">
						<a href="{{route('products', ['cat'=> $cat->slug])}}" class="s-text7">
							{{$cat->name}}
						</a>
					</li>
					@endforeach
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Search
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							About Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Contact Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Track Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shipping
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Newsletter
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2 footerImg p-r-10" src="{{asset('images/icons/bkash.png')}}" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2 footerImg p-r-10" src="{{asset('images/icons/rocket.png')}}" alt="IMG-PAYPAL">
			</a>
			
			<a href="#">
				<img class="h-size2 footerImg p-r-10" src="{{asset('images/icons/paypal.png')}}" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2 footerImg p-r-10" src="{{asset('images/icons/visa.png')}}" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2 footerImg p-r-10" src="{{asset('images/icons/mastercard.png')}}" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2 footerImg p-r-10" src="{{asset('images/icons/express.png')}}" alt="IMG-EXPRESS">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div  class = "btn-back-to-top bg0-hov" id        = "myBtn">
	<span class = "symbol-btn-back-to-top">
	<i    class = "fa fa-angle-double-up" aria-hidden = "true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



</body>


<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/select2/select2.min.js')}}"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/slick/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/lightbox2/js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="{{asset('js/main.js')}}"></script>
</html>





































{{--  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>  --}}
