@include('layout.header.logo')
@include('layout.header.left')
@include('layout.header.right')

@section('style')

	<!-- Header CSS -->
	<style>
		.body {
			margin-top: 15px;
		}
		.navbar {
			border-radius: 0px;
		}
		.yamm .yamm-content {
			padding: 15px 15px 0px 15px;
		}
	</style>
	@parent

@stop



@section('header')

	<!-- Layout Header -->
	<div class="header">
		<header class="navbar navbar-default yamm" id="top">
			<div class="{{ $headerContainer }}">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					@yield('header-logo')
				</div>
				<div class="navbar-collapse collapse navbar-responsive-collapse">
					<ul class="nav navbar-nav">
						{{-- Add your custom left side header menus and items here --}}
						@yield('header-left')

					</ul>
					<ul class="nav navbar-nav navbar-right">
						{{-- Add your custom right side header menus and items here --}}
						@yield('header-right')

					</ul>
				</div>
			</div>
		</header>
	</div>

@stop