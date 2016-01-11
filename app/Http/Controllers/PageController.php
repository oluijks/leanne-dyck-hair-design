<?php namespace LDHD\Http\Controllers;

class PageController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('guest');
	}

	/**
	 * Show the application about screen to the user.
	 *
	 * @return Response
	 */
	public function about()
	{
		return view('pages.about');
	}

	/**
	 * Show the application contact screen to the user.
	 *
	 * @return Response
	 */
	public function contact()
	{
		return view('pages.contact');
	}

	/**
	 * Show the application contact screen to the user.
	 *
	 * @return Response
	 */
	public function services()
	{
		return view('pages.services');
	}

	/**
	 * Show the application contact screen to the user.
	 *
	 * @return Response
	 */
	public function products()
	{
		return view('pages.products');
	}

	/**
	 * Show the application contact screen to the user.
	 *
	 * @return Response
	 */
	public function gallery()
	{
		return view('pages.gallery');
	}

	/**
	 * Show the application contact screen to the user.
	 *
	 * @return Response
	 */
	public function terms()
	{
		return view('pages.terms');
	}

	/**
	 * Show the application contact screen to the user.
	 *
	 * @return Response
	 */
	public function privacy()
	{
		return view('pages.privacy');
	}

	/**
	 * Show the application contact screen to the user.
	 *
	 * @return Response
	 */
	public function testimonials()
	{
		return view('pages.testimonials');
	}

	/**
	 * Show the application contact screen to the user.
	 *
	 * @return Response
	 */
	public function sitemap()
	{
		return view('pages.sitemap');
	}

	/**
	 * Show the application contact screen to the user.
	 *
	 * @return Response
	 */
	public function certificates()
	{
		return view('pages.certificates');
	}

	/**
	 * Show the application contact screen to the user.
	 *
	 * @return Response
	 */
	public function specials()
	{
		return view('pages.specials');
	}

	/**
	 * Show the application contact screen to the user.
	 *
	 * @return Response
	 */
	public function packages()
	{
		return view('pages.packages');
	}

}
