@extends('layout')

@section('css')
	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	<style>
		.container {
			text-align: center;
			vertical-align: middle;
		}
		.title, .quote {
			font-weight: 100;
			color: #B0BEC5;
			font-family: 'Lato';
		}
		.title {
			font-size: 96px;
			margin-bottom: 40px;
		}
		.quote {
			color: #666;
			font-size: 24px;
		}
		.footer {
			display: none;
		}
	</style>
@endsection


@section('content')
	<div class="{{ $container }}">
		<div class="title">mRcore</div>
		<div class="quote">{{ Inspiring::quote() }}</div>
	</div>
@endsection
