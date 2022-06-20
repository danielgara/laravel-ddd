<?php

namespace Src\Application\Account\Controllers;

use Illuminate\Http\Request;
use Src\Domain\Orders\Models\Order;
use Illuminate\Support\Facades\Auth;
use Src\Application\Shared\Controllers\Controller;

class AccountController extends Controller
{
    public function orders()
    {
        $viewData = [];
        $viewData["title"] = "My Orders - Online Store";
        $viewData["subtitle"] =  "My Orders";
        $viewData["orders"] = Order::with(['items.product'])->where('user_id', Auth::user()->getId())->get();
        return view('account.views.orders')->with("viewData", $viewData);
    }
}
