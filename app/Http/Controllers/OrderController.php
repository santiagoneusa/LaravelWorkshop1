<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class OrderController extends Controller
{
    public function index(): View
    {
        // show all the orders

        $viewData = [];
        $viewData['title'] = 'Orders - Plant Shop';
        $viewData['subtitle'] = 'List of Orders';
        $viewData['orders'] = '';

        return view('order.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        // show one order
        $viewData = [];
        $viewData['title'] = ''.' - Plant Shop';
        $viewData['subtitle'] = ''.' - Order Information';
        $viewData['order'] = '';

        return view('product.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        // create an order
        $viewData = [];
        $viewData['title'] = 'Orders - Plant Shop';
        $viewData['subtitle'] = 'Create Order';
        $viewData['order'] = '';

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
