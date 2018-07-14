<?php

namespace App\Http\Controllers;
use App\Http\Requests\SaveCommentPost;
use App\Repositories\PortfolioRepository;
use App\Repositories\BlogRepository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Exception;



class IndexController extends Controller {

	public function __construct()
	{
		$this->portfolio = new PortfolioRepository();
		$this->news = new BlogRepository();
	}
	
	public function getIndex() {
		$portfolios = $this->portfolio->getViewPortfolio();
		$news = $this->news->getAllWithComments();
		return view('index', array('news' => $news, 'portfolios' => $portfolios));
	}
	

	
	
	
	
	
	
	
	
	
	
	



}