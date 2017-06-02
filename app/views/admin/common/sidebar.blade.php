<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="header">Menu</li>
			<li><a href="{{ action('PostController@index') }}"><i class="fa fa-chevron-right"></i> <span>Quản lý bài viết</span></a></li>
			<li><a href="{{ action('PostTypeController@index') }}"><i class="fa fa-chevron-right"></i> <span>Quản lý thể loại bài viết</span></a></li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-list"></i> <span>Mục nổi bật trang chủ</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{ action('BlockController@btype', BLOCK_1) }}"><i class="fa fa-circle-o"></i> Box nổi bật trên</a></li>
					<li><a href="{{ action('BlockController@btype', BLOCK_2) }}"><i class="fa fa-circle-o"></i> Box nổi bật dưới</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-list"></i> <span>Quản lý slide</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{ action('SlideController@create') }}"><i class="fa fa-circle-o"></i> Thêm slide</a></li>
					<li><a href="{{ action('SlideController@stype', SLIDE_BANNER) }}"><i class="fa fa-circle-o"></i> Banner trang chủ</a></li>
					<li><a href="{{ action('SlideController@stype', SLIDE_PARTNER) }}"><i class="fa fa-circle-o"></i> Logo đối tác</a></li>
				</ul>
			</li>
			<li><a href="{{ action('ContactController@index') }}"><i class="fa fa-chevron-right"></i> <span>Quản lý liên hệ</span></a></li>
			<li><a href="{{ action('TypeProjectController@index') }}"><i class="fa fa-chevron-right"></i> <span>Quản lý thể loại dự án</span></a></li>
			<li><a href="{{ action('CityController@index') }}"><i class="fa fa-chevron-right"></i> <span>Quản lý tỉnh thành</span></a></li>
			<li><a href="{{ action('ConfigsiteController@edit', 1) }}"><i class="fa fa-chevron-right"></i> <span>Cài đặt chung</span></a></li>
			
			@if(Admin::isAdmin())
			<li>
				<a href="{{ action('ManagerController@index') }}">
					<i class="fa fa-users"></i> <span>Quản lý thành viên</span>
				</a>
			</li>
			@endif
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>