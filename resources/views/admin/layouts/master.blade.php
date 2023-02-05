<!DOCTYPE html>
<html>

@include('admin.layouts.head')

<body>
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--/Pre Loader -->
	<!-- Color Changer -->
	{{-- <div class="theme-settings" id="switcher">
		<span class="theme-click">
			<span class="ti-settings"></span>
		</span>
		<span class="theme-color theme-default" data-color="green"></span>
		<span class="theme-color theme-blue" data-color="blue"></span>
		<span class="theme-color theme-red theme-active" data-color="red"></span>
		<span class="theme-color theme-violet" data-color="violet"></span>
		<span class="theme-color theme-yellow" data-color="yellow"></span>
	</div> --}}
	<!-- /Color Changer -->
	<div class="wrapper">
        
		<!-- Sidebar -->  
		@include('admin.layouts.sidebar')
		<!-- /Sidebar -->
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
			@include('admin.layouts.topbar')
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
		
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
            @yield('content')
			<!-- /Main Content -->
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
		<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
	@include('admin.layouts.script')
</body>

</html>
