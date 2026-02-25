<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Order;

class OrderController extends Controller
{

    public function index(): View
    {
        $viewData = [];
        $viewData["orders"] = Order::all();

        return view('order.index')->with("viewData", $viewData);
    }

    public function show(string $id) : View
    {
        $viewData = [];
        $order = Order::findOrFail($id);
        $viewData["order"] = $order;

        return view('order.show')->with("viewData", $viewData);
    }

    public function create(): View
    {
        $viewData = []; 

        return view('order.create')->with("viewData",$viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            "total" => "required",
            "date" => "required",
            "paid" => "required",
            "shipped" => "required",
            "methodOfPayment" => "required"
        ]);
        Order::create($request->only(["total","date","paid","shipped","methodOfPayment"]));

        return back();

    }
}

