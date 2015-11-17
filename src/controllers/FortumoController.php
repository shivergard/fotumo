<?php namespace Shivergard\Fortumo;

use App\Requests;

use Illuminate\Http\Request;

use \Carbon;

use \Config;
use \Log;


class FortumoController extends \Shivergard\Fortumo\PackageController {

    public function test(){
        return false;
    }

    public function billing(){
        return false;
    }


    public function init(){
        Log::info("Hello [".$_SERVER['REMOTE_ADDR']."]");
        return \Shivergard\Fortumo\Fortumo::get();
    }

}