<?php namespace Scaffold\Presenters;

use App\Models\Article;
use McCool\LaravelAutoPresenter\BasePresenter;
use Carbon\Carbon;

class ArticlePresenter extends BasePresenter {

	public function __construct(Article $resource) {
		$this->wrappedObject = $resource;
	}

	public function created_at() {
		return $this->wrappedObject->created_at->format('jS M Y \a\t G:i');
	}

	public function modified_at() {
		return $this->wrappedObject->modified_at->format('jS M Y \a\t G:i');
	}
}