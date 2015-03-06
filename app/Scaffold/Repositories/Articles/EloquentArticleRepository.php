<?php namespace Scaffold\Repositories\Articles;

use App\Models\Article;
use Scaffold\Repositories\BaseEloquentRepository;

class EloquentArticleRepository extends BaseEloquentRepository implements ArticleRepositoryInterface {
	public function __construct(Article $model) {
		$this->model = $model;
	}
}