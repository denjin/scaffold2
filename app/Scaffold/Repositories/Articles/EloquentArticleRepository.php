<?php namespace Scaffold\Repositories\Articles;

use App\Models\Article;
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
		//create the article
		$article = $this->model->create($data);
		//return the attributes of the new article
		return $article->attributesToArray();
	}

	/**
	 * Updates an existing entry in the database
	 * @param $id
	 * @param array $data
	 */
	public function update($id, array $data) {
		//find the article
		$article = $this->model->findOrFail($id);
		if ($article) {
			//if we found the article, update it
			$article->update($data);
			//return the attributes of the updated article
			return $article->attributesToArray();
		}
		//if we couldn't find the article
		//abort
	}

	/**
	 * Removes an entry from the database
	 * @param int $id
	 * @param array $data
	 */
	public function destroy($id, array $data) {

	}
}