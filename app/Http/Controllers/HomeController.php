<?php


namespace App\Http\Controllers;

use App\Traits\GetProperties;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function indexAction(){
        return view('home.index');
    }
}
