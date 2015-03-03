<?php namespace Scaffold\Repositories\Articles;

use App\Http\Requests\CreateArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Request;
use Scaffold\Repositories\BaseEloquentRepository;

class EloquentArticleRepository extends BaseEloquentRepository implements ArticleRepositoryInterface {

	public function __construct(Article $model) {
		$this->model = $model;
	}

	/**
	 * Adds a new entry to the database
	 * @param array $data
	 * @return article
	 */
	public function store(array $data) {
		return $this->model->create($data);
	}

	/**
	 * Updates an existing entry in the database
	 * @param array $data
	 */
	public function update(array $data) {

	}

	/**
	 * Removes an entry from the database
	 * @param array $data
	 */
	public function destroy(array $data) {

	}
}