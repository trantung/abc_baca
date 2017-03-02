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

	</div>

</section>

@stop
