@include('frontend.layouts.top')
	@include('frontend.layouts.header')
		<!-- main content section -->
		@yield('content')
		<!-- end main content section -->
	@include('frontend.layouts.footer')
@include('frontend.layouts.bottom')