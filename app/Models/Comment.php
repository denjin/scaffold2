<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	/**
	 * Comment belongs to an Article
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function article() {
		return $this->belongsTo('Article');
	}

	/**
	 * Comment belongs to a User
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user() {
		return $this->belongsTo('\App\Models\User');
	}
}