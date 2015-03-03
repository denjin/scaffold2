<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Scaffold\Repositories\Articles\ArticleRepositoryInterface;
use App\Http\Requests\CreateArticleRequest;

class ArticlesController extends Controller {

	protected $article;

	public function __construct(ArticleRepositoryInterface $article) {
		$this->article = $article;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$articles = $this->article->findAll();
		return view('articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return view('articles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * @param $request
	 * @return Response
	 */
	public function store(CreateArticleRequest $request) {
		$article = $this->article->store($request->all());
		if($article) {
			return action('ArticlesController@show', [$article->id]);
		}
		return action('ArticlesController@create')->with($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		//
	}

}
