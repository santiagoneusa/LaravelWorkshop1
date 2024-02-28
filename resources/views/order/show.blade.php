@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Field</th>
            <th scope="col">Content</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th scope="row">Id</th>
            <td>{{ $viewData['order']->getId() }}</td>
        </tr>
        <tr>
            <th scope="row">Address</th>
            <td>{{ $viewData['order']->getAddress() }}</td>
        </tr>
        <tr>
            <th scope="row">Credit Card</th>
            <td>{{ $viewData['order']->getCreditCard() }}</td>
        </tr>
        <tr>
            <th scope="row">Date</th>
            <td>{{ $viewData['order']->getCreated_at() }}</td>
        </tr>
        <tr>
            <th scope="row">Price</th>
            <td>{{ $viewData['order']->getPrice() }}</td>
        </tr>
        <tr>
            <th scope="row">Status</th>
            <td>{{ $viewData['order']->getStatus() }}</td>
        </tr>

    </tbody>

</table>

<form method="POST" action="{{ route('order.delete', ['id'=> $viewData['order']['id']]) }}">
    @csrf
    <button type="submit" class="btn btn-danger">Delete Order</button>
</form>

@endsection