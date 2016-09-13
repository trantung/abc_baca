<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/assets/css/grid.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/jquery-migrate-1.2.1.js"></script>
	@if(isset($pageHome))
	<link rel="stylesheet" href="/assets/css/camera.css">
	<script src="/assets/js/camera.js"></script>
	@endif
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="/assets/js/jquery.mobile.customized.min.js"></script>
	<script src="/assets/js/wow/wow.js"></script>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>
	@if(isset($pageContact))
	<link rel="stylesheet" href="/css/contact-form.css">
	<script src="/js/TMForm.js"></script>
	<script src="/js/modal.js"></script>
	@endif
	<!--<![endif]-->
	<!--[if lt IE 8]>
  	<div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
	<map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
	<area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
	</map>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="/js/html5shiv.js"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="/css/ie.css">
	<![endif]-->
</head>