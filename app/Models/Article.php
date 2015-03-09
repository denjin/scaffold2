<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\HasPresenter;
use Scaffold\Presenters\ArticlePresenter;

class Article extends Model implements HasPresenter {

	//
	protected $fillable = ['title', 'body', 'published_at', 'slug'];

	/**
	 * Get the presenter class
	 * @return string
	 */
	public function getPresenterClass() {
		return ArticlePresenter::class;
	}

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
