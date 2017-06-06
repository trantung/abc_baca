@extends('site.layout.default', array('pageContact'=>1))

@section('title', 'Liên hệ')

@section('content')

<!--========================================================
													CONTENT 
=========================================================-->
<section id="content" class="content_pages">

	<div class="container">
		
		<div class="row">
			<div class="grid_6 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.0s">
				<p class="txt4 color4 marTop9">Thông tin<br><span class="colorff8401">Liên hệ</span></p>

				<address class="address1">
					{{ $configSite->company_contact }}
				</address>
				<!-- <div class="map">
					<figure class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
					</figure>
				</div> -->
			</div>

			<div class="grid_6 wow fadeInRight" data-wow-duration="" data-wow-delay="0.0s">
				{{ $configSite->form_manual }}
			</div>

		</div>
	</div>

</section>

@stop
