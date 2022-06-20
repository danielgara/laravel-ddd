<?php

namespace Src\Application\Products\Controllers;

use Src\Domain\Products\Models\Product;
use Illuminate\Http\Request;
use Src\Application\Shared\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = Product::all();
        return view('products.views.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName()." - Online Store";
        $viewData["subtitle"] =  $product->getName()." - Product information";
        $viewData["product"] = $product;
        return view('products.views.show')->with("viewData", $viewData);
    }
}
