<!--========================================================
													FOOTER 
=========================================================-->
@if(isset($configSite))
<div class="box-3">
	<div class="container">
		<div class="row">
			<div class="grid_12">
				<p><strong>{{ $configSite->company_name }}</strong></p>
				<p><strong>Địa chỉ: </strong>{{ $configSite->address }}</p>
				<p><strong>Điện thoại: <span class="color6">{{ $configSite->phone }}</span></strong></p>
				<p><strong>Email: </strong><a href="mailto:{{ $configSite->email }}">{{ $configSite->email }}</a></p>
			</div>
		</div>
	</div>
</div>
@endif
<footer id="footer" class="main_page">
	<div class="container">
		<div class="row">
			<div class="grid_12">
				<p class="txt_priv">Copyright &copy; <span id="copyright-year">2017</span>.</p>
			</div>
		</div>
	</div>
</footer>

<script src="/assets/js/script.js"></script>

@if(isset($pageHome))
<!--[if (gt IE 9)|!(IE)]><!-->
<script src="/assets/js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->

<script type="text/javascript">

$(document).ready(function(){
	jQuery('#camera_wrap').camera({
			loader: false,
			pagination: false,
			thumbnails: false,
			height: '37.03125%',
			fx: 'curtainBottomLeft',
			rows: '3',
			slicedCols: '3',
			slicedRows: '3',
			caption: false
		});
 });

</script>

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="/assets/css/swiper.min.css">
<!-- Swiper JS -->
<script src="/assets/js/swiper.jquery.min.js"></script>
<!-- Swiper JS -->
<!-- Initialize Swiper -->
<script>
var swiper = new Swiper('.swiper-container', {
	slidesPerView: 5,
	nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 0
});
</script>

@endif

@if(isset($pageOrder))
<script type="text/javascript">
 $(function (){
		$('#bookingForm').bookingForm({
				ownerEmail: '#'
		});
	})
</script>
@endif

@if(isset($pagePost))
<script type="text/javascript">
$(document).ready(function() {
	$(".fancybox-button").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: false,
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}
	});
});
</script>
@endif