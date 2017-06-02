<!--========================================================
													HEADER 
=========================================================-->
<header id="header">
	<div id="stuck_container">
		<div class="container">
			<div class="row">
				<div class="grid_3">
					<div><a href="/" class="toplogo1"><img src="/assets/images/logo.png" alt="Bắc Á Land" class="toplogo"></a> </div>
				</div>
				<div class="grid_9">
					<nav>
						<ul class="sf-menu">
							<li {{checkActive()}}><a href="/">Trang chủ<strong></strong></a></li>
							<li {{checkActive('gioi-thieu')}}><a href="/gioi-thieu">Giới thiệu<strong></strong></a>
								<!-- <ul class="submenu">
									<li><a href="#">Lorem ipsum </a></li>
									<li><a href="#">Conse ctetur</a></li>
									<li><a href="#">Do eiusmod </a>
										<ul class="submenu2">
											<li><a href="#">News</a></li>
											<li class="last"><a href="#">Archive</a></li>
										</ul>
									</li>
									<li><a href="#">Incididunt ut</a></li>
									<li><a href="#">Et dolore </a></li>
									<li class="last"><a href="#">Ut enim ad minim</a></li>
								</ul> -->
							</li>
							<li {{checkActive('dich-vu')}}><a href="/dich-vu">Dịch vụ<strong></strong></a></li>
							<li {{checkActive('du-an')}}><a href="/du-an">Dự án<strong></strong></a></li>
							<li {{checkActive('cong-nghe-nha-mau-ao')}}><a href="/cong-nghe-nha-mau-ao">Công nghệ nhà mẫu ảo<strong></strong></a></li>
							<!-- <li><a href="/dat-hang">Đặt hàng<strong></strong></a></li> -->
							<li id="last-li" {{checkActive('lien-he')}}><a href="/lien-he">Liên hệ<strong></strong></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>