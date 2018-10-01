@extends('layouts.app')
@section('title', 'Products')
@section('content')

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style>
			.span.page-link{
				background-color: #222222;
				color: white;
			  }
	</style>
</head>
	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/banner-3.jpg); background-attachment:fixed; ">
		
		<h2 class="l-text2 t-center">
			Shop
		</h2>
		<p class="m-text13 t-center">
			Get Exciting Products
		</p>
		
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="{{route('products')}}" class="s-text13 active1">
									All
								</a>
							</li>

							@foreach ($cats as $cat)
							<li class="p-t-4">
									<a href="{{route('products', ['cat'=> $cat->slug])}}" class="s-text13">
										{{$cat->name}}
									</a>
								</li>
							@endforeach
						</ul>

						

						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					
					
					
					@if ($products->count()==0)
					<div class="flex-sb-m flex-w p-b-250">
							<div class="flex-w">
								<div class="rs2-select2 bo4 w-size12 m-t-5 m-b-5 m-r-10">
									<div class="btn-group">
										<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
												Price Range
										</button>
										<div class="dropdown-menu">
										  <a class="dropdown-item" href="{{route('products')}}">Reset</a>
										  <hr>
										  <a class="s-text13 dropdown-item" href="{{route('products', ['from'=>1, 'to'=>500])}}">৳ 1 - ৳ 500</a>
										  <a class="s-text13 dropdown-item" href="{{route('products', ['from'=>500, 'to'=>100])}}">৳ 500 - ৳ 1000</a>
										  <a class="s-text13 dropdown-item" href="{{route('products', ['from'=>1000, 'to'=>2000])}}">৳ 1000 - ৳ 2000</a>
										  <a class="s-text13 dropdown-item" href="{{route('products', ['from'=>2000, 'to'=>5000])}}">৳ 2000 - ৳ 5000</a>
										  <a class="s-text13 dropdown-item" href="{{route('products', ['moreThan'=>5000])}}">৳ 5000+ </a>
										</div>
									</div>
								</div>
							</div>
							
							<span>
								<h1 class="m-text12"> No Products Found :( </h1>
							</span>
							<span class="s-text8 p-t-5 p-b-5">
									Showing {{$products->count()}} result(s)
							</span>
							
						</div>
					
					@else
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							{{--  <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Default Sorting</option>
									<option>Popularity</option>
									<option>Price: low to high</option>
									<option>Price: high to low</option>
								</select>
							</div>  --}}

							<div class="rs2-select2 bo4 w-size12 m-t-5 m-b-5 m-r-10">
								<div class="btn-group">
									<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
											Price Range
									</button>
									<div class="dropdown-menu">
									  <a class="dropdown-item" href="{{route('products')}}">Reset</a>
									  <hr>
									  <a class="s-text13 dropdown-item" href="{{route('products', ['from'=>1, 'to'=>500])}}">৳ 1 - ৳ 500</a>
									  <a class="s-text13 dropdown-item" href="{{route('products', ['from'=>500, 'to'=>100])}}">৳ 500 - ৳ 1000</a>
									  <a class="s-text13 dropdown-item" href="{{route('products', ['from'=>1000, 'to'=>2000])}}">৳ 1000 - ৳ 2000</a>
									  <a class="s-text13 dropdown-item" href="{{route('products', ['from'=>2000, 'to'=>5000])}}">৳ 2000 - ৳ 5000</a>
									  <a class="s-text13 dropdown-item" href="{{route('products', ['moreThan'=>5000])}}">৳ 5000+ </a>
									</div>
								</div>
							</div>
						</div>
						
						<span>
							<h1 class="m-text12"> {{ $title}} </h1>
						</span>
						<span class="s-text8 p-t-5 p-b-5">
							Showing {{$products->count()}} result(s)
						</span>
					</div>
					<!-- Product -->

					<div class="row">
						@foreach($products as $product)
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="{{$product->img}}" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
										
									</div>
								
								</div>

								<div class="block2-txt p-t-20">
									<a href="{{route('products.show', $product->name)}}" class="block2-name dis-block s-text3 p-b-5">
										{{$product->name}}
									</a>

									<span class="block2-price m-text6 p-r-5">
											৳ {{$product->price}}
									</span>
								</div>
							</div>
						</div>
						@endforeach					
					</div>
					
					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						{{ $products->appends(request()->input())->links() }}
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif
	
	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
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
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>


	{{--  try  --}}

	<script>
			$(document).ready(function(){
	
				// Lift card and show stats on Mouseover
				$('#product-card').hover(function(){
						$(this).addClass('animate');
						$('div.carouselNext, div.carouselPrev').addClass('visible');			
					 }, function(){
						$(this).removeClass('animate');			
						$('div.carouselNext, div.carouselPrev').removeClass('visible');
				});	
				
				// Flip card to the back side
				$('#view_details').click(function(){		
					$('div.carouselNext, div.carouselPrev').removeClass('visible');
					$('#product-card').addClass('flip-10');
					setTimeout(function(){
						$('#product-card').removeClass('flip-10').addClass('flip90').find('div.shadow').show().fadeTo( 80 , 1, function(){
							$('#product-front, #product-front div.shadow').hide();			
						});
					}, 50);
					
					setTimeout(function(){
						$('#product-card').removeClass('flip90').addClass('flip190');
						$('#product-back').show().find('div.shadow').show().fadeTo( 90 , 0);
						setTimeout(function(){				
							$('#product-card').removeClass('flip190').addClass('flip180').find('div.shadow').hide();						
							setTimeout(function(){
								$('#product-card').css('transition', '100ms ease-out');			
								$('#cx, #cy').addClass('s1');
								setTimeout(function(){$('#cx, #cy').addClass('s2');}, 100);
								setTimeout(function(){$('#cx, #cy').addClass('s3');}, 200);				
								$('div.carouselNext, div.carouselPrev').addClass('visible');				
							}, 100);
						}, 100);			
					}, 150);			
				});			
				
				// Flip card back to the front side
				$('#flip-back').click(function(){		
					
					$('#product-card').removeClass('flip180').addClass('flip190');
					setTimeout(function(){
						$('#product-card').removeClass('flip190').addClass('flip90');
				
						$('#product-back div.shadow').css('opacity', 0).fadeTo( 100 , 1, function(){
							$('#product-back, #product-back div.shadow').hide();
							$('#product-front, #product-front div.shadow').show();
						});
					}, 50);
					
					setTimeout(function(){
						$('#product-card').removeClass('flip90').addClass('flip-10');
						$('#product-front div.shadow').show().fadeTo( 100 , 0);
						setTimeout(function(){						
							$('#product-front div.shadow').hide();
							$('#product-card').removeClass('flip-10').css('transition', '100ms ease-out');		
							$('#cx, #cy').removeClass('s1 s2 s3');			
						}, 100);			
					}, 150);			
					
				});	
			
				
				/* ----  Image Gallery Carousel   ---- */
				
				var carousel = $('#carousel ul');
				var carouselSlideWidth = 335;
				var carouselWidth = 0;	
				var isAnimating = false;
				
				// building the width of the casousel
				$('#carousel li').each(function(){
					carouselWidth += carouselSlideWidth;
				});
				$(carousel).css('width', carouselWidth);
				
				// Load Next Image
				$('div.carouselNext').on('click', function(){
					var currentLeft = Math.abs(parseInt($(carousel).css("left")));
					var newLeft = currentLeft + carouselSlideWidth;
					if(newLeft == carouselWidth || isAnimating === true){return;}
					$('#carousel ul').css({'left': "-" + newLeft + "px",
										   "transition": "300ms ease-out"
										 });
					isAnimating = true;
					setTimeout(function(){isAnimating = false;}, 300);			
				});
				
				// Load Previous Image
				$('div.carouselPrev').on('click', function(){
					var currentLeft = Math.abs(parseInt($(carousel).css("left")));
					var newLeft = currentLeft - carouselSlideWidth;
					if(newLeft < 0  || isAnimating === true){return;}
					$('#carousel ul').css({'left': "-" + newLeft + "px",
										   "transition": "300ms ease-out"
										 });
					isAnimating = true;
					setTimeout(function(){isAnimating = false;}, 300);			
				});
			});
	</script>

@endsection
