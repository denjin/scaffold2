<?php

namespace Scaffold\Repositories\Articles;


interface ArticleRepositoryInterface {
	public function findAll();
	public function findById($id);
	public function findByKey($key, $value, array $with = []);
	public function findManyByKey($key, $value, array $with = []);
	public function findByPage($page, $limit, array $with = [], $sortField = ['created_at'], $sortDir = ['desc']);

	public function store(array $data);
	public function update($id, array $data);
	public function destroy($id, array $data);
}