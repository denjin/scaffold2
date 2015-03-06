<?php namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Laravel\Socialite\Facades\Socialite;
use Scaffold\AuthenticateUserListener;
use Scaffold\Repositories\Users\UserRepositoryInterface;
use Illuminate\Support\Facades\Session;
use Scaffold\AuthenticateUser;

class AuthController extends Controller implements AuthenticateUserListener {
	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;


	/**
	 * Create a new authentication controller instance.
	 * @param  \Illuminate\Contracts\Auth\Guard $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar $registrar
	 */
	public function __construct(Guard $auth, Registrar $registrar) {
		$this->auth = $auth;
		$this->registrar = $registrar;
		$this->middleware('guest', ['except' => 'getLogout']);
	}

	public function socialLogin(AuthenticateUser $authenticateUser, Request $request) {
		$provider = $request->get('provider');
		$hasCode = $request->has('code');
		return $authenticateUser->execute($hasCode, $this, $provider);
	}

	public function userHasLoggedIn($user) {
		return redirect('/')->with('message', 'Hello. You are now signed in.');
	}
}
