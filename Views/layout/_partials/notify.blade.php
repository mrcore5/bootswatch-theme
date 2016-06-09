@section('scripts')
	@parent
	<script>
		$(function() {
			function notify(type, title, msg) {
				$.growl({ location: 'br', style: type, title: title, message: msg });
			}

			@if (Session::has('notify'))
				var type = '{{ Session::get("notify")["type"] }}';
				var title = '{{ Session::get("notify")["title"] }}';
				var msg = '{{ Session::get("notify")["msg"] }}';

				notify(type, title, msg);
			@endif
		});
	</script>

@stop
