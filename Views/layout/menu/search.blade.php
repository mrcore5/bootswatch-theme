@section('search-menu')

<li class="dropdown yamm-fullwidth">
	<a href="#" id="search-button" class="dropdown-toggle" data-toggle="dropdown">
		<i class="fa fa-search" style="font-size: 110%;"></i>
	</a>
	<ul class="dropdown-menu" id="search-menu">
		<li>
			<div class="yamm-content">
				<div class="well">
					<div class="row">
						<div class="col-sm-10">
							<input type="text" id="search" class="form-control" placeholder="Search query (leave blank to show all)">
						</div>
						<div class="col-sm-2">
							<button id='search-go-btn' name='search-go-btn' class='btn btn-success'>
								Go <i class="fa fa-arrow-right"></i>
							</button>
						</div>
					</div>
					<hr />
					<div id="searchbox">
						<i class="fa fa-spinner fa-spin"></i>
						Loading Searchbox ...
					</div>
				</div>
			</div>
		</li>
	</ul>
</li>

@stop