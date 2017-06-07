<?php 
	if(isset($post)) {
		$title = ($post->meta_title!='')?$post->meta_title:$post->name;
		$meta_title = ($post->meta_title!='')?$post->meta_title:$post->name;
		$meta_keyword = ($post->meta_keyword!='')?$post->meta_keyword:$post->name;
		$meta_description = ($post->meta_description!='')?$post->meta_description:$post->name;
		$meta_image = $post->meta_image;
	}
	$extendData = array(
			'pagePost' => 1,
			'meta_title' => $meta_title,
			'meta_keyword' => $meta_keyword,
			'meta_description' => $meta_description,
			'meta_image' => $meta_image,
		);
?>
@extends('site.layout.default', $extendData)

@section('title', $title)
<link rel="stylesheet" href="/assets/css/swiper.min.css">
@section('content')
<style>
    html, body {
        position: relative;
        height: 100%;
    }
    body {
        background: #000;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 200px;
        margin-left: auto;
        margin-right: auto;
    }
    .swiper-slide {
        background-size: cover;
        background-position: center;
    }
    .gallery-top {
        height: 80%;
        width: 100%;
    }
    .gallery-thumbs {
        height: 20%;
        box-sizing: border-box;
        padding: 10px 0;
    }
    .gallery-thumbs .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }
    .gallery-thumbs .swiper-slide-active {
        opacity: 1;
    }
    
    </style>
<!--========================================================
													CONTENT 
=========================================================-->
<section id="content">
	<div class="container">
		<h1 class="txt3 color4 marTop9 marBot3">{{ $post->name }}</h1>
        @if ($post->slug != 'gioi-thieu')
            <!-- Swiper -->
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    @foreach($images as $value)
                        <div class="swiper-slide" style="background-image:url({{ $value->image }})"></div>
                    @endforeach
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
            <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                    @foreach($images as $value)
                        <div class="swiper-slide" style="width : 170px;background-image:url({{ $value->image }})"></div>
                    @endforeach
                </div>
            </div>
        @endif
		@if($post->embed != '')
		<div class="marBot3 description">
		<iframe src="{{ $post->embed }}" style="border:none; width: 100%; height: 400px;" allowfullscreen></iframe>
		</div>
		@endif

		<p class="marBot3">{{ $post->summary }}</p>

		<div class="marBot3 description">
			{{ $post->description }}
		</div>
        @if(isset($postInCategory))
        <div class="partner">
            <h3 class="box-title-center">Dự án cùng tiêu chí</h3>
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($postInCategory as $value)
                    <div class="swiper-slide" style="width: 160px!important"><img src="{{ url($value->image) }}"></div>
                    @endforeach
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        @endif
        @if ($post->form_manual != '')
            {{ $post->form_manual }}
        @endif
	</div>

</section>
<!-- Swiper JS -->
<script src="/assets/js/swiper.js"></script>
<!-- Initialize Swiper -->
<script>
var galleryTop = new Swiper('.gallery-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
});
var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 'auto',
    touchRatio: 0.2,
    slideToClickedSlide: true
});
galleryTop.params.control = galleryThumbs;
galleryThumbs.params.control = galleryTop;

</script>
@stop
