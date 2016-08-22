@extends('layout')

@include('components.notify')

@section('content')

	<home inline-template>
		<p>
			Welcome @{{ user2 }}
		</p>

		<p>
			Not @{{ user2 }}?  Enter your name <input type="text" v-model="user2">
		</p>

		<button @click="notify">Notify Now</button>

	</home>

	<div class="{{ $container }}">
		<div class="title">mRcore</div>
	</div>
@endsection









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
