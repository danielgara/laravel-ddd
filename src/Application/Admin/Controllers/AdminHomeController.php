<?php

namespace Src\Application\Admin\Controllers;

use Src\Application\Shared\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Admin - Online Store";
        return view('admin.views.home.index')->with("viewData", $viewData);
    }
}
