@include('layout.header')
@include('layout.body')
@include('layout.footer')
@include('layout.script')

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>
		@yield('title') 
		</title>
		{!! Layout::viewport() !!} 
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />


		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="{{ asset('js/html5shiv.js') }}"></script>
		<script src="{{ asset('js/respond.min.js') }}"></script>
		<![endif]-->

		<!-- Font Awesome -->
		<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/font-awesome-animation.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/yamm.css') }}" rel="stylesheet">

		<!-- mRcore Layout CSS -->
		@foreach (Layout::css() as $css)
<link href="{{ asset($css) }}" rel="stylesheet">
		@endforeach
		@foreach (Layout::printCss() as $css)
<link href="{{ asset($css) }}" rel="stylesheet" media="print">
		@endforeach

		<!-- Inline Layout CSS - section('style') -->
		@yield('style')

		<!-- Inline Page CSS - section('css') -->
		@yield('css')

	</head>


	<body {{ Layout::bodyAttr() }}>
		@if (!Layout::hideHeaderbar())
		@yield('header')
		@endif

		@yield('body')

		@if (!Layout::hideFooterbar())
		@yield('footer')
		@endif

	</body>


	@yield('scripts')


</html>