<?php namespace Scaffold;

use Illuminate\Contracts\Auth\Guard;
use Laravel\Socialite\Contracts\Factory as Socialite;
use Scaffold\Repositories\Users\UserRepositoryInterface;
use Illuminate\Support\Facades\Session;

class AuthenticateUser {
	private $users;
	private $socialite;
	private $auth;

	public function __construct(UserRepositoryInterface $users, Socialite $socialite, Guard $auth) {
		$this->users = $users;
		$this->socialite = $socialite;
		$this->auth = $auth;
	}

	public function execute($hasCode, AuthenticateUserListener $listener, $provider) {
		if (!$hasCode) {
			Session::put('provider', $provider);
			return $this->getAuthorisationFirst($provider);
		}

		$user = $this->users->findEmailOrCreate($this->getAuthorisedUser(Session::pull('provider')));
		$this->auth->login($user, true);
		return $listener->userHasLoggedIn(true);
	}

	private function getAuthorisationFirst($provider) {
		return $this->socialite->with($provider)->redirect();
	}

	private function getAuthorisedUser($provider) {
		return $this->socialite->with($provider)->user();
	}
}