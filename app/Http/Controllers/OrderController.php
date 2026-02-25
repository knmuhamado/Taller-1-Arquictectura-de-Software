<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class OrderController extends Controller
{
    // Function to return the home view of the orders module
    public function home(): View
    {
        return view('order.home');
    }

    // Function to return the index view of the orders module with all the orders
    public function index(): View
    {
        $viewData = [];
        $viewData['orders'] = Order::all();

        return view('order.index')->with('viewData', $viewData);
    }

    // Function to return the show view of the orders module with the order that has the id passed as parameter
    public function show(string $id): View
    {
        $viewData = [];
        $order = Order::findOrFail($id);
        $viewData['order'] = $order;

        return view('order.show')->with('viewData', $viewData);
    }

    // Function to return the create view of the orders module
    public function create(): View
    {
        return view('order.create');
    }

    // Function to save the order created in the create view of the orders module
    public function save(OrderRequest $request): RedirectResponse
    {
        Order::create($request->validated());

        return redirect()->route('order.list')
            ->with('success', 'Order created successfully.');

    }

    // Function to delete the order that has the id passed as parameter
    public function delete(string $id): \Illuminate\Http\RedirectResponse
    {
        Order::destroy($id);

        return redirect()->route('order.list');
    }
}
