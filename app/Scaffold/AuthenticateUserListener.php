<?php namespace Scaffold;

interface AuthenticateUserListener {
	public function userHasLoggedIn($user);
}