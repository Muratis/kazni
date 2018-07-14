<?php
namespace App\Repositories;

use App\Models\Portfolio;

class PortfolioRepository
{

	public function __construct()
	{
		$this->portfolio = new Portfolio();

	}

	public function getViewPortfolio()
	{
		$all = $this->portfolio->select('id', 'title', 'meta_project_image', 'meta_project', 'created_at')->get();
		return $all;
	}

	public function getViewOneProject($id) {
		$project = $this->portfolio->select('id', 'title', 'meta_project_image','link_to_project','slide_images_project', 'desc_project', 'created_at')
			->where('id', '=', $id)->first();

		return $project;
	}

}