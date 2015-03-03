<?php namespace App\Http\Controllers;

use App\Http\Requests;
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
	 * @return mixed
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
			return redirect()->action('ArticlesController@show', [$article['slug']]);
		}
		return redirect()->action('ArticlesController@create')->with($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug) {
		//get the article
		$article = $this->article->findByKey('slug', $slug);
		//if we found an article
		if ($article) {
			//build the view
			return view('articles.single', compact('article'));
		}
		//404
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function edit($slug) {
		//get the article
		$article = $this->article->findByKey('slug', $slug);
		//if we found an article
		if ($article) {
			//build the view
			return view('articles.edit', compact('article'));
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param $request
	 * @return Response
	 */
	public function update($id, CreateArticleRequest $request) {
		$article = $this->article->update($id, $request->all());
		//if the article was updated
		if ($article) {
			return redirect()->action('ArticlesController@show', [$article['slug']]);
		}
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
