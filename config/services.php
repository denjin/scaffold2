<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'User',
		'secret' => '',
	],

	'facebook' => [
		'client_id' => '800992713270916',
		'client_secret' => '32c06d1f7b250067784471cfc50d4b62',
		'redirect' => 'http://scaffold2.app:8000/social_login'
	],

	'google' => [
		'client_id' => '209155984100-j2jmag8akpk56vfpacti21h7ged70spo.apps.googleusercontent.com',
		'client_secret' => 'HYil0LRVEHYoua0gE0hbWm4K',
		'redirect' => 'http://scaffold2.app:8000/social_login'
	],

	'twitter' => [
		'client_id' => '800992713270916',
		'client_secret' => '32c06d1f7b250067784471cfc50d4b62',
		'redirect' => 'http://scaffold2.app:8000/social_login'
	],

];
