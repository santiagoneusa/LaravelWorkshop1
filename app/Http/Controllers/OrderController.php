<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

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

    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        // save de product and redirect the user to the homepage

        $request->validate([
            'address' => ['required'],
            'creditCard' => ['required'],
            'price' => ['required'],
        ]);

        $order = Order::create($request->only(['address', 'creditCard', 'price']));
        Session::flash('success', 'Order '.$order->getId().' created successfully.');

        return redirect()->route('order.index');
    }

    public function delete(string $id): \Illuminate\Http\RedirectResponse
    {
        // delete an specific order
        Order::destroy($id);

        Session::flash('alert', 'Order '.$id.' deleted successfully.');

        return redirect()->route('order.index');
    }
}
