<?php namespace App\Http\Requests;

use Illuminate\Contracts\Auth\Guard;

class CommentRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 * @param $auth
	 * @return bool
	 */
	public function authorize(Guard $auth) {
		if($auth->user()->role->id > 0) {
			return true;
		}
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'comment' => 'required|min:10'
		];
	}

}
