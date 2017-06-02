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
	<link rel="stylesheet" href="/assets/css/swiper.min.css">
<!--========================================================
													CONTENT 
=========================================================-->
<section id="content">

	<div class="container">
		@if (isset($hotProject))
			<div class="partner">
				<h3 class="box-title-center">DỰ ÁN HOT</h3>
				<!-- Swiper -->
			    <div class="swiper-container">
			        <div class="swiper-wrapper">
			            <div class="swiper-slide"><img src="{{ url('/images/post/29/Lighthouse-1496433125.jpg') }}"></div>
			            <div class="swiper-slide"><img src="{{ url('/images/post/29/Lighthouse-1496433125.jpg') }}"></div>
			            <div class="swiper-slide"><img src="{{ url('/images/post/29/Lighthouse-1496433125.jpg') }}"></div>
			            <div class="swiper-slide"><img src="{{ url('/images/post/29/Lighthouse-1496433125.jpg') }}"></div>
			            <div class="swiper-slide"><img src="{{ url('/images/post/29/Lighthouse-1496433125.jpg') }}"></div>
			            <div class="swiper-slide"><img src="{{ url('/images/post/29/Lighthouse-1496433125.jpg') }}"></div>
			        </div>
			        <!-- Add Arrows -->
			        <div class="swiper-button-next"></div>
			        <div class="swiper-button-prev"></div>
			    </div>
		
			</div>
		@endif

		<h1 class="txt4 color4 marTop9 marBot3">{{ $type->name }}</h1>
		
		@if($blocks)
			@if (isset($servicesPage))
				<div class="row" style="padding-top: 20px;">
		        <div class="col-md-12">
		          <!-- The time line -->
		          <ul class="timeline">
		            
		            <!-- timeline item -->
		            <li>
		              <i class="fa fa-calculator bg-blue"></i>

		              <div class="timeline-item">

		                <h3 class="timeline-header"><span href="#">{{ $blocks[0]->name }}</span> {{ $blocks[0]->name2 }}</h3>

		                <div class="timeline-body">
			                 {{ $blocks[0]->description }}
		                </div>
		                <div class="timeline-footer">
		                  <a class="btn btn-warning btn-xs">Xem thêm</a>
		                </div>
		              </div>
		            </li>
		            <!-- END timeline item -->
		            <!-- timeline item -->
		            <li>
		              <i class="fa fa-chart bg-aqua"></i>

		              <div class="timeline-item">

		                <h3 class="timeline-header no-border"><span>{{ $blocks[1]->name }}</span> {{ $blocks[1]->name2 }}</h3>
		                <div class="timeline-body">
			                 {{ $blocks[1]->description }}
		                </div>
		                <div class="timeline-footer">
		                  <a class="btn btn-warning btn-xs">Xem thêm</a>
		                </div>
		              </div>
		            </li>
		            <!-- END timeline item -->
		            <!-- timeline item -->
		            <li>
		              <i class="fa fa-circle bg-yellow"></i>

		              <div class="timeline-item">

		                <h3 class="timeline-header"><span>{{ $blocks[2]->name }} </span> {{ $blocks[2]->name2 }}</h3>

		                <div class="timeline-body">
			                 {{ $blocks[2]->description }}
		                </div>
		                <div class="timeline-footer">
		                  <a class="btn btn-warning btn-xs">Xem thêm</a>
		                </div>
		              </div>
		            </li>
		            <!-- END timeline item -->
		            <li>
		              <i class="fa fa-clock-o bg-gray"></i>
		            </li>
		          </ul>
		        </div>
		        <!-- /.col -->
		      </div>
			@endif
			
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
<script src="/assets/js/swiper.jquery.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
	slidesPerView: 5,
	nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 0
});
</script>
@stop