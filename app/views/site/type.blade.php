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
<style type="text/css">
	@media only screen and (max-width: 480px) and (min-width: 320px){
	  .hidden-xs{
	      display: none;
	  }
	}
	@media only screen and (max-width: 1600px) and (min-width: 480px){
	  .visible-xs{
	      display: none;
	  }
	}
	.center-fix {
		text-align: center;
	}
</style>
<script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 4,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 4,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 4
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <style>
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
        .jssorb03 {
            position: absolute;
        }
        .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
            position: absolute;
            /* size of bullet elment */
            width: 21px;
            height: 21px;
            text-align: center;
            line-height: 21px;
            color: white;
            font-size: 12px;
            background: url('img/b03.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb03 div { background-position: -5px -4px; }
        .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
        .jssorb03 .av { background-position: -65px -4px; }
        .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }

        /* jssor slider arrow navigator skin 03 css */
        /*
        .jssora03l                  (normal)
        .jssora03r                  (normal)
        .jssora03l:hover            (normal mouseover)
        .jssora03r:hover            (normal mouseover)
        .jssora03l.jssora03ldn      (mousedown)
        .jssora03r.jssora03rdn      (mousedown)
        .jssora03l.jssora03ldn      (disabled)
        .jssora03r.jssora03rdn      (disabled)
        */
        .jssora03l, .jssora03r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a03.png') no-repeat;
            overflow: hidden;
        }
        .jssora03l { background-position: -3px -33px; }
        .jssora03r { background-position: -63px -33px; }
        .jssora03l:hover { background-position: -123px -33px; }
        .jssora03r:hover { background-position: -183px -33px; }
        .jssora03l.jssora03ldn { background-position: -243px -33px; }
        .jssora03r.jssora03rdn { background-position: -303px -33px; }
        .jssora03l.jssora03lds { background-position: -3px -33px; opacity: .3; pointer-events: none; }
        .jssora03r.jssora03rds { background-position: -63px -33px; opacity: .3; pointer-events: none; }
    </style>
<!--========================================================
													CONTENT 
=========================================================-->
<section id="content">
	<div class="container">
		@if ($type->is_slide == ACTIVE)
			<div class="partner hidden-xs">
				<h3 class="box-title-center">DỰ ÁN HOT</h3>
				<!-- Swiper -->
			    <div class="swiper-container">
			        <div class="swiper-wrapper">
			        	@foreach (Post::where('type', $type->id)->where('is_hot', ACTIVE)->where('status', ACTIVE)->get() as $element)
			        		<div class="swiper-slide">
				        		<img src="{{ url($element->image) }}">
			        		</div>
			        	@endforeach
			        </div>
			        <!-- Add Arrows -->
			        <div class="swiper-button-next"></div>
			        <div class="swiper-button-prev"></div>
			    </div>
		
			</div>
            <div class="partner visible-xs">
                <div class="swiper-container-xs">
                    <div class="swiper-wrapper">
                        @foreach (Post::where('type', $type->id)->where('is_hot', ACTIVE)->where('status', ACTIVE)->get() as $element)
                            <div class="swiper-slide"><img src="{{ url($element->image) }}"></div>
                        @endforeach
                    </div>
                </div>
            </div>
			<div class="col-md-12 hidden-xs center-fix">
				@foreach (TypeProject::where('status', ACTIVE)->orderBy('weight_number', 'ASC')->get() as $item)
					<a class="btn btn-warning btn-xs select-type" data-id="{{ $item->id }}">{{ $item->name }}</a>
				@endforeach
			</div>
			<div class="col-md-12 hidden-xs center-fix">
				@foreach (City::where('status', ACTIVE)->orderBy('weight_number', 'ASC')->get() as $item)
					{{ Form::radio('city_id', 1, null, ['class' => 'select-city', 'data-id' => $item->id]) }} {{ $item->name }}
				@endforeach
			</div>
			<div class="col-md-12 visible-xs">
				{{ Form::select('type_project', TypeProject::where('status', ACTIVE)->orderBy('weight_number', 'ASC')->lists('name', 'id'), null,  array('class' => 'form-control', 'style' => 'width:100%'))}}
			</div>
			<div class="col-md-12 visible-xs">
				{{ Form::select('city_id', City::where('status', ACTIVE)->orderBy('weight_number', 'ASC')->lists('name', 'id'), null,  array('class' => 'form-control', 'style' => 'width:100%'))}}
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
		                  {{-- <a class="btn btn-warning btn-xs">Xem thêm</a> --}}
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
		                  {{-- <a class="btn btn-warning btn-xs">Xem thêm</a> --}}
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
		                  {{-- <a class="btn btn-warning btn-xs">Xem thêm</a> --}}
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
			<div class="row" id="content-project">
				@include('site.project-render')
				
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
<script src="/assets/js/swiper.jquery.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
	slidesPerView: 5,
	nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 0
});
var swiper = new Swiper('.swiper-container-xs', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    spaceBetween: 30,
});
$(document).ready(function () {
    $('.select-city').on('change', function (e) {
        var id = $(this).attr('data-id');
        var check = $(this).prop("checked");
        if (check) {
        	getProject('city_id', id);
        }
    });
    $('.select-type').on('click', function (e) {
        var id = $(this).attr('data-id');
        if (id) {
        	getProject('type_project_id', id);
        }
    });
});
function getProject(field, value) {
	$.ajax({
        type: "GET",
        url: '/filter-project?slug=du-an&' + field + '=' + value,
        success: function(response){
        	$("#project-render").remove();
            $('#content-project').append(response);
            $('.pagination').hide();
        }
    });
}   
</script>
<script type="text/javascript">jssor_1_slider_init();</script>
@stop