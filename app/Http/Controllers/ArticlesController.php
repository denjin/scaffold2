<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Scaffold\Repositories\Articles\ArticleRepositoryInterface;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller {
	protected $article;

	public function __construct(ArticleRepositoryInterface $article) {
		$this->article = $article;
	}

	/**
	 * Display a listing of the resource.
	 * @return view
	 */
	public function index() {
		$page = Input::get('page', 1);
		$data = $this->article->findByPage($page, 5);
		$articles = new LengthAwarePaginator($data->items, $data->totalItems, 5);
		$articles->setPath('/articles');
		if($articles) {
			return view('articles.index', compact('articles'));
		}
	}

	/**
	 * Show the form for creating a new resource.
	 * @return view
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
	 * Display the specified resource, eager loads relationship with the user and with any comments
	 * @param  string  $slug
	 * @return view
	 */
	public function show($slug) {
		$article = $this->article->findByKey('slug', $slug, array('user', 'comments'));
		if ($article) {
			return view('articles.single', compact('article'));
		}
		//404
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  string  $slug
	 * @return view
	 */
	public function edit($slug) {
		$article = $this->article->findByKey('slug', $slug);
		if ($article) {
			return view('articles.edit', compact('article'));
		}
		//404
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
		if ($article) {
			return redirect()->action('ArticlesController@show', [$article['slug']]);
		}
		//error
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
