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
	<style type="text/css">
		.content-block {
			height: 390px
		}
		.swiper-slide {
			width: 150px !important;
		}
	</style>
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
							@if($value->url != '' && $value->url != '#')
							<a href="{{ $value->url }}" class="camera_more_btn v2">Xem thêm</a>
							@endif
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- end Camera -->
	@endif



	<div class="container">
		<div class="row">
			<div class="grid_4 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.0s">
				<div class="content-block">
				<h2 class="color262626">{{ $blocks[3]->name }} <br><span class="colorff8401">{{ $blocks[3]->name2 }}</span></h2>
					{{ $blocks[3]->description }}
				</div>
				<a href="{{ url($blocks[3]->url) }}" class="more_btn2">Xem thêm</a>
			</div>

			<div class="grid_4 wow fadeInUp" data-wow-duration="" data-wow-delay="0.3s">
				<div class="content-block">
					<h2 class="color262626">{{ $blocks[4]->name }} <br><span class="colorff8401">{{ $blocks[4]->name2 }}</span></h2>
				{{ $blocks[4]->description }}
				</div>
				<a href="{{ url($blocks[4]->url) }}" class="more_btn2">Xem thêm</a>
			</div>

			<div class="grid_4 wow fadeInRight listWithMarker" data-wow-duration="" data-wow-delay="0.6s">
				<div class="content-block">
					<h2 class="color262626">{{ $blocks[5]->name }}<span class="colorff8401"><br>{{ $blocks[5]->name2 }}</span></h2>
				{{ $blocks[5]->description }}
				</div>
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
	@if(count($partnersOther) > 0)
	<div class="partner">
		<h3 class="box-title-center">Đối tác khác</h3>
		<!-- Swiper -->
	    <div class="swiper-container">
	        <div class="swiper-wrapper">
	        	@foreach($partnersOther as $value)
	            <div class="swiper-slide"><img src="{{ url($value->image) }}"></div>
	            @endforeach
	        </div>
	        <!-- Add Arrows -->
	        <div class="swiper-button-next"></div>
	        <div class="swiper-button-prev"></div>
	    </div>

	</div>
	@endif

	<!-- @include('site.common.bottom') -->

</section>

@stop
