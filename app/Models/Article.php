<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	//
	protected $fillable = [
		'title',
		'body',
		'published_at',
		'slug'
	];

	/**
	 * Article belongs to a user
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user() {
		return $this->belongsTo('\App\Models\User');
	}

	/**
	 * Article has many Comments
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function comments() {
		return $this->hasMany('\App\Models\Comment');
	}
}
