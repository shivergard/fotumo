<?php namespace Shivergard\Fortumo;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use \Auth;
use \Redirect;


abstract class PackageController extends BaseController {

	use DispatchesCommands, ValidatesRequests;

	public function __construct()
	{}

}