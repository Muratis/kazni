<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Exception;


class Types_sites_and_pricesController extends Controller {

	public function getInformation_LandingPage()
	{
		return view('infoForSites/info_landingPage');
	}

	public function getInformation_CorpotationSite()
	{
		return view('infoForSites/info_CorpotationSite');
	}

	public function getInformation_CatalogSite()
	{
		return view('infoForSites/info_CatalogSite');
	}

	public function getInformation_CardSite()
	{
		return view('infoForSites/info_CardSite');
	}

	public function getInformation_SelfPromoSite()
	{
		return view('infoForSites/info_SelfPromoSite');
	}

	public function getInformation_PromoSite()
	{
		return view('infoForSites/info_PromoSite');
	}

	public function getInformation_OnlineShop()
	{
		return view('infoForSites/info_OnlineShop');
	}

	public function getInformation_Unusual()
	{
		return view('infoForSites/info_Unusual');
	}

}