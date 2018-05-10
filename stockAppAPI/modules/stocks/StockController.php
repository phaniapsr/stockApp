<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 5/10/18
 * Time: 10:47 PM
 */

namespace Stocks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockController extends Controller{
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index(Request $request)
	{
		$users = $this->userRepository->findBy($request->all());

		return $this->respondWithCollection($users, $this->userTransformer);
	}


}