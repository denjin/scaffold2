<?php namespace Scaffold\Repositories\Users;

use App\Models\User;
use Scaffold\Repositories\BaseEloquentRepository;

class EloquentUserRepository extends BaseEloquentRepository implements UserRepositoryInterface {
	public function __construct(User $model) {
		$this->model = $model;
	}

	public function findEmailOrCreate($userData) {
		return $this->model->firstOrCreate([
			'username' => $userData->name,
			'email' => $userData->email
		]);
	}
}