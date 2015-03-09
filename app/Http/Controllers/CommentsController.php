<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\CommentRequest;
use Scaffold\Repositories\Comments\CommentRepositoryInterface;

class CommentsController extends Controller {
	protected $comment;

	public function __construct(CommentRepositoryInterface $comment) {
		$this->comment = $comment;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * @param $request
	 * @return Response
	 */
	public function store(CommentRequest $request) {
		$comment = $this->comment->store($request->all());
		if($comment) {
			dd($comment);
			//return redirect()->action('ArticlesController@show', [$article['slug']]);
		}
		dd($request);
		//return redirect()->action('ArticlesController@create')->with($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
