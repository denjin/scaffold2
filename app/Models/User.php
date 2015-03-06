<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'email', 'password', 'oauth_token'];

	/**
	 * The attributes excluded from the model's JSON form.
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * User has many Articles
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function articles() {
		return $this->hasMany('\App\Models\Article');
	}

	/**
	 * User has many Comments
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function comments() {
		return $this->hasMany('\App\Models\Comment');
	}

	/**
	 * User has one Role
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function role() {
		return $this->belongsTo('\App\Models\Role');
	}

}
