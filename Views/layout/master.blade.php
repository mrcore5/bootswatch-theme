@include('layout.header')
@include('layout.body')
@include('layout.footer')
@include('layout.script')

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>
		@yield('title')
		</title>
		{!! Layout::viewport() !!}
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />

		<!-- html5shiv and respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="{{ asset('js/shiv-bundle.js') }}"></script>
		<![endif]-->

		<!-- Bundles -->
		<link href="{{ asset('css/theme-bundle.css') }}" rel="stylesheet">

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

		@yield('scripts')

	</body>

</html>
