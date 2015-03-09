<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Scaffold\Repositories\Comments\CommentRepositoryInterface;
use Scaffold\Repositories\Comments\EloquentCommentRepository;
use Scaffold\Repositories\Articles\ArticleRepositoryInterface;
use Scaffold\Repositories\Articles\EloquentArticleRepository;
use Scaffold\Repositories\Users\UserRepositoryInterface;
use Scaffold\Repositories\Users\EloquentUserRepository;

class DatabaseServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		$this->registerArticleRepository();
		$this->registerUserRepository();
		$this->registerCommentRepository();
	}

	private function registerArticleRepository() {
		return $this->app->bind(ArticleRepositoryInterface::class, EloquentArticleRepository::class);
	}

	private function registerUserRepository() {
		return $this->app->bind(UserRepositoryInterface::class, EloquentUserRepository::class);
	}

	private function registerCommentRepository() {
		return $this->app->bind(CommentRepositoryInterface::class, EloquentCommentRepository::class);
	}
}
