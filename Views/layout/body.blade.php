@section('style')

	<!-- Body CSS -->
	<style>
		body {
			/* make room for our scroll-to-top button */
			/*margin-bottom: 20px;*/
		}
		.no-container .body {
			padding-left: 15px;
			padding-right: 15px;
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
