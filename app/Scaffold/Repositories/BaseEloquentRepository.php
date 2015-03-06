<?php namespace Scaffold\Repositories;

use StdClass;

abstract class BaseEloquentRepository {
	protected $model = null;

	/**
	 * Query blueprint for getting relationships
	 * @param array $with
	 */
	public function make(array $with = []) {
		return $this->model->with($with);
	}

	/**
	 * Get all entries
	 */
	public function findAll() {
		return $this->model->all();
	}

	/**
	 * Get a single entry by the primary key
	 * @param $id
	 */
	public function findById($id) {
		return $this->model->find($id);
	}

	/**
	 * Get a single entry by a value in a column
	 * @param $key - the column to search
	 * @param $value - the value to search for
	 * @param $with - array of relationships to eager load
	 */
	public function findByKey($key, $value, array $with = []) {
		$query = $this->make($with);
		return $query->where($key, '=', $value)->first();
	}

	/**
	 * find many entries by a field on a column and eager loads any designated relationships
	 * @param $key - string - column to search
	 * @param $value - string - field to find
	 * @param $with - array of relationships to eager load
	 * @return array of results
	 */
	public function findManyByKey($key, $value, array $with = []) {
		$query = $this->make($with);
		return $query->where($key, '=', $value)->get();
	}

	/**
	 * gets a paginated set of results and eager loads any designated relationships
	 * @param $page - page of results to grab
	 * @param $limit - number of results to show
	 * @param $with - array of relationships to eager load
	 * @param string $sortField - column to search by
	 * @param string $sortDir - direction to search in
	 * @return StdClass
	 */
	public function findByPage($page = 1, $limit = 10, array $with = [], $sortField = 'created_at', $sortDir = 'desc') {
		//create empty object
		$results = new StdClass();
		//push parameters into results object
		$results->page = $page;
		$results->limit = $limit;
		$results->totalItems = 0;
		$results->items = array();
		//eager load any desired relationships
		$query = $this->make($with);
		//query the data with the parameters
		$posts = $query->orderBy($sortField, $sortDir)->skip($limit * ($page - 1))->take($limit)->get();
		//add the total items to the results
		$results->totalItems = $this->model->count();
		//add the data to the results
		$results->items = $posts->all();
		return $results;
	}

	/**
	 * Adds a new entry to the database
	 * @param array $data
	 * @return article
	 */
	public function store(array $data) {
		//create the article
		$entry = $this->model->create($data);
		//return the attributes of the new article
		return $entry->attributesToArray();
	}

	/**
	 * Updates an existing entry in the database
	 * @param $id
	 * @param array $data
	 */
	public function update($id, array $data) {
		//find the article
		$entry = $this->model->findOrFail($id);
		if ($entry) {
			//if we found the article, update it
			$entry->update($data);
			//return the attributes of the updated article
			return $entry->attributesToArray();
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