<?php

namespace App\Http\Controllers;
use App\Http\Requests\SaveBlogPost;
use App\Http\Requests\SaveCommentPost;

use App\Repositories\BlogRepository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Exception;


class BlogsController extends Controller {
	
	public $news;
	public function __construct()
	{
		$this->news = new BlogRepository();
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	
	public function getAll()
	{
		$news = $this->news->getAllWithComments();
		return view('index', array('news' => $news));
	}

	/**
	 * @param $post_id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	
	public function getView($post_id) {
		$news = $this->news->getOneView($post_id);
		$comments = $this->news->getAllComments($post_id);
		return view('blog/full-article', array('news' => $news, 'comments' => $comments));
	}

	
	public function postAdd_comment(SaveCommentPost $request)
	{
		
		$this->news->store_comment($request);
		return redirect()->route('one', array('post_id' => $request->post_id));
	}

	/**
	 * @param Request $request
	 */
	
	public function postDeleteComment(Request $request)
	{
		$this->news->deleteComment($request);
	}
	
	/**
	 * 
	 */
}