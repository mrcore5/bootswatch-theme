@section('main-menu')

	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<i class="fa fa-bars" style="font-size: 130%"></i>
		</a>

		<ul id="post-menu" class="dropdown-menu">
			<li>
				<a href="#" title='Edit (Ctrl+Enter)'>
					<i class="fa fa-edit"></i>
					Edit Post
				</a>
			</li>
			<li class="divider"></li>
		
			<li>
				<a href="#">
					<i class="fa fa-folder-o"></i>
					Post Files
				</a>
			</li>

			<li>
				<a href="#" title="Info (Ctrl+I)">
					<i class="fa fa-exclamation-circle"></i>
					Post <sup>#</sup>1 Info
				</a>
			</li>


			<li class="divider"></li>

			<li>
				<a href="?simple" target="_blank">
					<i class="fa fa-file-o" style="padding-right: 0px"></i>
					View Simple
				</a>
			</li>

			<li>
				<a href="?raw" target="_blank">
					<i class="fa fa-html5"></i>
					View Raw
				</a>
			</li>

		</ul>
	</li>

@stop