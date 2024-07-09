<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use IntegrationOS\AuthKit\AuthKit;

Route::get('/', function () {
	return view('welcome');
});

Route::post('/create-embed-token', function () {
	$client = new AuthKit(env("IOS_PRODUCTION_KEY"), [
		"base_url" => "https://development-api.integrationos.com"
	]);

	return $client->create([
		"group" => Str::random(10),
		"label" => Str::random(10),
	]);
});
