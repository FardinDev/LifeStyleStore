@extends('layouts.app')
@section('title', 'About')
@section('content')

	{{--  <!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/about-banner.png);">
		<h2 class="l-text2 t-center">
			About
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="images/banner-02.jpg" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Our story
					</h3>

					<p class="p-b-28">
						Phasellus egestas nisi nisi, lobortis ultricies risus semper nec. Vestibulum pharetra ac ante ut pellentesque. Curabitur fringilla dolor quis lorem accumsan, vitae molestie urna dapibus. Pellentesque porta est ac neque bibendum viverra. Vivamus lobortis magna ut interdum laoreet. Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula. Vivamus tristique vulputate ultricies. Sed vitae ultrices orci.
					</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11">
							Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didnot really do it, they just saw something. It seemed obvious to them after a while.
						</p>

						<span class="s-text7">
							- Steve Job’s
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>  --}}

<head>
	<div class="row">

		{{-- single --}}
		<div class="example-2 card">
			<div class="wrapper">
					<img src="{{asset('images/product (9).jpg')}}" alt="ico" style="height:100%; width:auto;">
				<div class="header">
					<div class="date">
						<span class="day">12</span>
						<span class="month">Aug</span>
						<span class="year">2016</span>
					</div>
					<ul class="menu-content">
						<li>
							<a href="#" class="fa fa-bookmark-o"></a>
						</li>
						<li><a href="#" class="fa fa-heart-o"><span>18</span></a></li>
						<li><a href="#" class="fa fa-comment-o"><span>3</span></a></li>
					</ul>
				</div>
				<div class="data">
					<div class="content">
						<h1 class="title"><a href="#">Stranger Things: The sound of the Upside Down</a></h1>
						<p class="text">The antsy bingers of Netflix will eagerly anticipate the digital release of the Survive soundtrack, out today.</p>
						<a href="#" class="button">Read more</a>
					</div>
				</div>
			</div>
		</div>	
{{-- single-end --}}
	</div>




@endsection