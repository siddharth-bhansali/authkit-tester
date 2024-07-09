<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use IntegrationOS\AuthKit\AuthKit;

Route::get('/', function () {
	return view('welcome');
});

Route::post('/create-embed-token', function () {
	$client = new AuthKit(env("IOS_DEVELOPMENT_KEY"), [ // change the value to IOS_PRODUCTION_KEY for production
		"base_url" => "https://development-api.integrationos.com" // change the api url to whatever necessary, removing it considers the production url as default
	]);

	return $client->create([
		"group" => Str::random(10),
		"label" => Str::random(10),
	]);
});
