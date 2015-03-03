<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

/**
 * Handles the logic for showing "static" base pages such as about, links, etc
 * Class PagesController
 * @package App\Http\Controllers
 */

class PagesController extends Controller {

	public function home() {
		return view('pages.home');
	}



}
