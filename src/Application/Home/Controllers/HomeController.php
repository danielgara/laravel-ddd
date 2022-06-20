<?php

namespace Src\Application\Home\Controllers;

use Illuminate\Http\Request;
use Src\Application\Shared\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('home.views.index')->with("viewData", $viewData);
    }
    
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] =  "About us";
        $viewData["description"] =  "This is an about page ...";
        $viewData["author"] = "Developed by: Your Name";
        return view('home.views.about')->with("viewData", $viewData);
    }
}
