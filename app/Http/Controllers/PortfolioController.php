<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\PortfolioRepository;

class PortfolioController extends Controller 
{
	public function __construct()
	{
		$this->portfolio = new PortfolioRepository();

	}
	public function getViewPortfolio() 
	{
		$portfolios = $this->portfolio->getViewPortfolio();
		return view('/index', array('portfolios' => $portfolios));
	}

	public function getViewOneProject($id) {
		$portfolio =$this->portfolio->getViewOneProject($id);

		return view('/portfolio/full_project', array('portfolio' => $portfolio));
	}

}