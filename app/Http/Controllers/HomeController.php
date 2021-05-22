<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use illuminate\http\Request;

class HomeController extends Controller {


    public function home()
    {
        return view("home0187");
    }
    public function artikel()
    {
        return view("artikel0187");
    }
    public function contactus()
    {
        return view("contactus0187");
    }
}