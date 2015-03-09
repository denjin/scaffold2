<?php namespace Scaffold\Repositories\Comments;

use App\Models\Comment;
use Scaffold\Repositories\BaseEloquentRepository;

class EloquentCommentRepository extends BaseEloquentRepository implements CommentRepositoryInterface {
	function __construct(Comment $model) {
		$this->model = $model;
	}
}