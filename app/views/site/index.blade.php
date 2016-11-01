<?php 
	if(isset($configSite)) {
		$title = ($configSite->meta_title)?$configSite->meta_title:'Trang chủ';
		$meta_title = $configSite->meta_title;
		$meta_keyword = $configSite->meta_keyword;
		$meta_description = $configSite->meta_description;
		$meta_image = $configSite->meta_image;
	}
	$extendData = array(
			'pageHome'=>1,
			'meta_title' => $meta_title,
			'meta_keyword' => $meta_keyword,
			'meta_description' => $meta_description,
			'meta_image' => $meta_image,
		);
?>
@extends('site.layout.default', $extendData)

@section('title', 'Trang chủ')

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
							<a href="{{ $value->url }}" class="camera_more_btn v2">Xem thêm</a>
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
					<p class="marTop2 lh26">{{ $blocks[1]->description }}</p>
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
				<h2 class="color262626">{{ $blocks[3]->name }} <br><span class="colorff8401">{{ $blocks[3]->name2 }}</span></h2>
				{{ $blocks[3]->description }}
				<a href="{{ url($blocks[3]->url) }}" class="more_btn2">Xem thêm</a>
			</div>

			<div class="grid_4 wow fadeInUp" data-wow-duration="" data-wow-delay="0.3s">
				<h2 class="color262626">{{ $blocks[4]->name }} <br><span class="colorff8401">{{ $blocks[4]->name2 }}</span></h2>
				{{ $blocks[4]->description }}
				<a href="{{ url($blocks[4]->url) }}" class="more_btn2">Xem thêm</a>
			</div>

			<div class="grid_4 wow fadeInRight listWithMarker" data-wow-duration="" data-wow-delay="0.6s">
				<h2 class="colorff8401"><span class="color262626">{{ $blocks[5]->name }}</span><br>{{ $blocks[5]->name2 }}</h2>
				{{ $blocks[5]->description }}
				<a href="{{ url($blocks[5]->url) }}" class="more_btn2">Xem thêm</a>
			</div>
		</div>
	</div>



	<div class="box-2 custom-box-2">
		<h3 class="box-title-center">Các dự án phân phối</h3>
		<div class="container">
			<div class="row">
				@if(count($posts) > 0)
				@foreach($posts as $value)
				<div class="grid_4">
					<div class="post-item">
						<a href="{{ url($value->slug) }}">
							<img src="{{ url($value->image) }}">
							<div class="post-label">
								<span>{{ $value->name }}</span>
							</div>
						</a>
					</div>
				</div>
				@endforeach
				@endif
			</div>
			<div class="pj-seemore"><a href="/du-an">Xem thêm</a></div>
		</div>
	</div>

	@if(count($partners) > 0)
	<div class="partner">
		<h3 class="box-title-center">Đối tác chiến lược</h3>
		<!-- Swiper -->
	    <div class="swiper-container">
	        <div class="swiper-wrapper">
	        	@foreach($partners as $value)
	            <div class="swiper-slide"><img src="{{ url($value->image) }}"></div>
	            @endforeach
	        </div>
	        <!-- Add Arrows -->
	        <div class="swiper-button-next"></div>
	        <div class="swiper-button-prev"></div>
	    </div>

	</div>
	@endif

	@include('site.common.bottom')

</section>

@stop
