<?php 
	$page = Input::get('page');
	if(isset($page) && $page > 1) {
		$prefix = '|Trang '.$page;
	} else {
		$prefix = '';
	}
	if(count($type) > 0) {
		$title = ($type->meta_title!='')?$type->meta_title:$type->name;
		$meta_title = ($type->meta_title!='')?$type->meta_title:$type->name;
		$meta_keyword = ($type->meta_keyword!='')?$type->meta_keyword:$type->name;
		$meta_description = ($type->meta_description!='')?$type->meta_description:$type->name;
		$meta_image = $type->meta_image;
	}
	$extendData = array(
			'meta_title' => $meta_title.$prefix,
			'meta_keyword' => $meta_keyword,
			'meta_description' => $meta_description.$prefix,
			'meta_image' => $meta_image,
		);
?>
@extends('site.layout.default', $extendData)

@section('title', $title)

@section('content')
	
<!--========================================================
													CONTENT 
=========================================================-->
<section id="content">

	<div class="container">
		<h1 class="txt4 color4 marTop9 marBot3">{{ $type->name }}</h1>
		
		@if($blocks)
			<div class="container marBot3">
				<div class="row">
					<div class="grid_4">
						<div class="wrapper">
							<!-- <img src="/assets/images/page1_icon1.png" alt="" class="img1 no_resize"> -->
							<div class="icon_holder img1">
								<i class="fa fa-calculator"></i>
							</div>
							<h2 class="color262626"><span>{{ $blocks[0]->name }}</span> {{ $blocks[0]->name2 }}</h2>
						</div>
						<p class="marTop1 lh26">{{ $blocks[0]->description }}</p>
						<a href="{{ url($blocks[0]->url) }}" class="more_btn2">Xem thêm</a>
					</div>

					<div class="grid_4">
						<div class="wrapper">
							<div class="icon_holder img1 v2">
								<i class="fa fa-bar-chart"></i>
							</div>
							<h2 class="color262626"><span>{{ $blocks[1]->name }}</span> {{ $blocks[1]->name2 }}</h2>
						</div>
						<p class="marTop2 lh26">{{ $blocks[1]->description }}</p>
						<a href="{{ url($blocks[1]->url) }}" class="more_btn2">Xem thêm</a>
					</div>

					<div class="grid_4">
						<div class="wrapper">
							<div class="icon_holder img1 v3">
								<i class="fa fa-info-circle"></i>
							</div>
							<h2 class="color262626"><span>{{ $blocks[2]->name }} </span> {{ $blocks[2]->name2 }}</h2>
						</div>
						<p class="marTop1 lh26">{{ $blocks[2]->description }}</p>
						<a href="{{ url($blocks[2]->url) }}" class="more_btn2">Xem thêm</a>
					</div>
				</div>
			</div>
		@else
			@if(count($posts) > 0)
				<div class="row">
					@if(count($posts) > 0)
					@foreach($posts as $value)
					<div class="grid_4">
						<div class="post-item">
							<a href="{{ url($value->slug) }}" class="overlay">
								<img src="{{ url($value->image) }}">
								<div class="post-label">
									<span>{{ $value->name }}</span>
									<p>{{ $value->summary }}</p>
								</div>
							</a>
						</div>
					</div>
					@endforeach
					@endif
				</div>

				@if($posts->getTotal() >= PAGINATION)
				<div class="row">
					<ul class="pagination">
			    		{{ with(new Paginate($posts))->render() }}
			    	</ul>
				</div>
				@endif

			@endif
		@endif

	</div>

</section>

@stop
