@section('style')

	<!-- Body CSS -->
	<style>
		body {
			/* make room for our scroll-to-top button */
			margin-bottom: 20px;
		}
		.container .body {
			padding-top: 15px;
		}
		.no-container .body {
			padding: 15px;
		}
	</style>
	@parent

@stop



@section('body')

	<!-- Layout Body -->
	<div class="{{ $container }}">
		<div class="body">
			@yield('content')
		</div>
	</div>

@stop
