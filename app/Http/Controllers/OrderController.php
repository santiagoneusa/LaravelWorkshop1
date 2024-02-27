<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(): View
    {
        // show all the orders

        $viewData = [];

        $viewData['title'] = 'Orders - Plant Shop';
        $viewData['subtitle'] = 'List of Orders';
        $viewData['orders'] = Order::all();

        return view('order.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        // show one order
        
        $viewData = [];
        $order = Order::findOrFail($id);

        $viewData['title'] = 'Order '.$order->getId().' - Plant Shop';
        $viewData['subtitle'] = 'Order from '.$order->getCreated_at().' - Information';
        $viewData['order'] = $order;

        return view('order.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        // create an order

        $viewData = [];
        $viewData['title'] = 'Orders - Plant Shop';
        $viewData['subtitle'] = 'Create Order';

        return view('order.create')->with('viewData', $viewData);
    }

    public function save(): \Illuminate\Http\RedirectResponse
    {
        // save de product and redirect the user to the homepage
        return redirect()->route('order.index');
    }

    public function delete(): View
    {
        return view('');
    }
}
