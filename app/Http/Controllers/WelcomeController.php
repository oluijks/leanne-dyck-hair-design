<?php

namespace LDHD\Http\Controllers;

use Illuminate\Http\Request;

use LDHD\Http\Requests;
use LDHD\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}
}
