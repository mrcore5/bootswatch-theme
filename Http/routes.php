<?php

Route::get('/', function() {
	return view('welcome-to-mrcore');
});


Route::get('/grid', function() {
	return view('grid');
});
