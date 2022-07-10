<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function indexAction(){
        return view('home.index');
    }
}
