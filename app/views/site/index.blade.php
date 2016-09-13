@extends('site.layout.default', array('pageHome'=>1))

@section('title')
    {{ $title = 'Trang chủ' }}
@stop

@section('content')
	
<!--========================================================
													CONTENT 
=========================================================-->
<section id="content">        

	@if(count($banners) > 0)
	<!-- start Camera -->
	<div class="camera_main_container  wow fadeIn">
		<div class="slider_wrapper">
			<div class="" id="camera_wrap">
				@foreach($banners as $value)
				<div data-src="{{ url($value->image) }}">
					<div class="caption fadeIn">
						<div class="caption_bg">
							<span class="slider_txt1">{{ $value->name }} </span>
							<span class="slider_txt2 color4">{{ $value->name2 }} </span>
							<span class="slider_txt3 color4">{{ $value->summary }}</span>
							<a href="{{ $value->url }}" class="camera_more_btn v2">Read more</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- end Camera -->
	@endif


	<div class="box-1">
		<div class="container">
			<div class="row">
				<div class="grid_4 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.0s">
					<div class="wrapper">
						<!-- <img src="/assets/images/page1_icon1.png" alt="" class="img1 no_resize"> -->
						<div class="icon_holder img1">
							<i class="fa fa-calculator"></i>
						</div>
						<h2 class="color3"><span>{{ $blocks[0]->name }}</span> {{ $blocks[0]->name2 }}</h2>
					</div>
					<p class="marTop1 lh26">{{ $blocks[0]->description }}</p>
					<a href="{{ url($blocks[0]->url) }}" class="more_btn">Xem thêm</a>
				</div>

				<div class="grid_4 wow fadeInUp" data-wow-duration="" data-wow-delay="0.2s">
					<div class="wrapper">
						<div class="icon_holder img1 v2">
							<i class="fa fa-bar-chart"></i>
						</div>
						<h2 class="color3"><span>{{ $blocks[1]->name }}</span> {{ $blocks[1]->name2 }}</h2>
					</div>
					<p class="marTop2 lh26">{{ $blocks[0]->description }}</p>
					<a href="{{ url($blocks[1]->url) }}" class="more_btn">Xem thêm</a>
				</div>

				<div class="grid_4 wow fadeInRight" data-wow-duration="" data-wow-delay="0.4s">
					<div class="wrapper">
						<div class="icon_holder img1 v3">
							<i class="fa fa-info-circle"></i>
						</div>
						<h2 class="color3"><span>{{ $blocks[2]->name }} </span> {{ $blocks[2]->name2 }}</h2>
					</div>
					<p class="marTop1 lh26">{{ $blocks[2]->description }}</p>
					<a href="{{ url($blocks[2]->url) }}" class="more_btn">Xem thêm</a>
				</div>
			</div>
		</div>
	</div>



	<div class="container">
		<div class="row">
			<div class="grid_4 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.0s">
				<h2>{{ $blocks[3]->name }} <br><span>{{ $blocks[3]->name2 }}</span></h2>
				{{ $blocks[3]->description }}
				<a href="{{ url($blocks[3]->url) }}" class="more_btn2">Xem thêm</a>
			</div>

			<div class="grid_4 wow fadeInUp" data-wow-duration="" data-wow-delay="0.3s">
				<h2>{{ $blocks[4]->name }} <br><span>{{ $blocks[4]->name2 }}</span></h2>
				{{ $blocks[4]->description }}
				<a href="{{ url($blocks[4]->url) }}" class="more_btn2">Xem thêm</a>
			</div>

			<div class="grid_4 wow fadeInRight listWithMarker" data-wow-duration="" data-wow-delay="0.6s">
				<h2><span>{{ $blocks[5]->name }}</span><br>{{ $blocks[5]->name2 }}</h2>
				{{ $blocks[5]->description }}
				<a href="{{ url($blocks[5]->url) }}" class="more_btn2">Xem thêm</a>
			</div>
		</div>
	</div>



	<div class="box-2 custom-box-2">
		<h3 class="box-title-center">Các dự án phân phối</h3>
		<div class="wrapper marTop6  wow fadeInUp">

			<figure class="figure1">
				<a href="/assets/images/project_big_pic1.jpg" class="magnifier2" >
					<img src="/assets/images/project_small_pic1.jpg" alt="">
					<span class="zoom">
						<span class="descr_txt">
							<span class="txt1">$ 1,889.899</span>
							<span class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</span>
						</span>
					</span>
				</a>
			</figure>

			<figure class="figure1">
				<a href="/assets/images/project_big_pic2.jpg" class="magnifier2" >
					<img src="/assets/images/project_small_pic2.jpg" alt="">
					<span class="zoom">
						<span class="descr_txt">
							<span class="txt1">$ 1,889.899</span>
							<span class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</span>
						</span>
					</span>
				</a>
			</figure>

			<figure class="figure1">
				<a href="/assets/images/project_big_pic3.jpg" class="magnifier2" >
					<img src="/assets/images/project_small_pic3.jpg" alt="">
					<span class="zoom">
						<span class="descr_txt">
							<span class="txt1">$ 1,889.899</span>
							<span class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</span>
						</span>
					</span>
				</a>
			</figure>

			<figure class="figure1">
				<a href="/assets/images/project_big_pic4.jpg" class="magnifier2" >
					<img src="/assets/images/project_small_pic4.jpg" alt="">
					<span class="zoom">
						<span class="descr_txt">
							<span class="txt1">$ 1,889.899</span>
							<span class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</span>
						</span>
					</span>
				</a>
			</figure>

			<figure class="figure1">
				<a href="/assets/images/project_big_pic5.jpg" class="magnifier2" >
					<img src="/assets/images/project_small_pic5.jpg" alt="">
					<span class="zoom">
						<span class="descr_txt">
							<span class="txt1">$ 1,889.899</span>
							<span class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</span>
						</span>
					</span>
				</a>
			</figure>

			<figure class="figure1">
				<a href="/assets/images/project_big_pic6.jpg" class="magnifier2" >
					<img src="/assets/images/project_small_pic6.jpg" alt="">
					<span class="zoom">
						<span class="descr_txt">
							<span class="txt1">$ 1,889.899</span>
							<span class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</span>
						</span>
					</span>
				</a>
			</figure>

			<figure class="figure1">
				<a href="/assets/images/project_big_pic7.jpg" class="magnifier2" >
					<img src="/assets/images/project_small_pic7.jpg" alt="">
					<span class="zoom">
						<span class="descr_txt">
							<span class="txt1">$ 1,889.899</span>
							<span class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</span>
						</span>
					</span>
				</a>
			</figure>

			<figure class="figure1">
				<a href="/assets/images/project_big_pic8.jpg" class="magnifier2" >
					<img src="/assets/images/project_small_pic8.jpg" alt="">
					<span class="zoom">
						<span class="descr_txt">
							<span class="txt1">$ 1,889.899</span>
							<span class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</span>
						</span>
					</span>
				</a>
			</figure>

			<figure class="figure1">
				<a href="/assets/images/project_big_pic9.jpg" class="magnifier2" >
					<img src="/assets/images/project_small_pic9.jpg" alt="">
					<span class="zoom">
						<span class="descr_txt">
							<span class="txt1">$ 1,889.899</span>
							<span class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</span>
						</span>
					</span>
				</a>
			</figure>

			<figure class="figure1">
				<a href="/assets/images/project_big_pic10.jpg" class="magnifier2" >
					<img src="/assets/images/project_small_pic10.jpg" alt="">
					<span class="zoom">
						<span class="descr_txt">
							<span class="txt1">$ 1,889.899</span>
							<span class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</span>
						</span>
					</span>
				</a>
			</figure>

		</div>
	</div>

	@if(count($partners) > 0)
	<div class="partner">
		<h3 class="box-title-center">Đối tác chiến lược</h3>
		
	</div>
	@endif

	@include('site.common.bottom')

</section>

@stop
