@section('scripts')

	{{-- Standard scripts --}}
	<script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>

	{{-- Layout script file array --}}
	@foreach (Layout::js() as $js) 
	<script src="{{ asset($js) }}"></script>
	@endforeach

	{{-- Layout script code array --}}
	@if (Layout::script())
	<script>
	@foreach (Layout::script() as $script) 
	{{ $script }} 
	@endforeach
	</script>
	@endif

	{{-- Page script sections --}}
	@yield('script')

	{{-- Master script code --}}
	<script>
	$(function() {

		// Yamm
		$(document).on('click', '.yamm .dropdown-menu', function(e) {
			e.stopPropagation()
		})

		// btn-scroll-up animations
		$(window).scroll(function(){
			if($(window).scrollTop() >= 600) {
				$('#btn-scroll-up').fadeIn(500);
			} else {
				$('#btn-scroll-up').fadeOut(500);
			}
		});


	});
	</script>

@stop
