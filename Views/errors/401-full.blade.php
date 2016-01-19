@extends('layout')

@section('title')
	Access Denied
@endsection

@section('content')

	<div class="error-container">
		<div class="well">
			<h1>
				<i class="fa fa-lock"></i>
				401 Unauthorized
			</h1>

			<hr />
			<h3>Access denied to requested url {{ Request::path() }}</h3>

			<div>
				<h4>Try one of the following:</h4>

				<ul class="list-unstyled">
					<li>
						<i class="fa fa-hand-o-right"></i>
						Sign in as an authorized user
					</li>
					<li>
						<i class="fa fa-hand-o-right"></i>
						Check the url for typos
					</li>

					<li>
						<i class="fa fa-hand-o-right"></i>
						Search or browse for the document manually
					</li>
				</ul>
			</div>

			<hr />

			<div class="center">
				<a href="javascript:window.history.back()" class="btn btn-grey">
					<i class="fa fa-arrow-left"></i>
					Go Back
				</a>

				<a href="/" class="btn btn-primary">
					<i class="fa fa-home"></i>
					Go Home
				</a>
			</div>
		</div>
	</div>

@endsection