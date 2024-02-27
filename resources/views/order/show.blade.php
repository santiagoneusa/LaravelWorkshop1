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
            <td>{{ $viewData['order']['id'] }}</td>
        </tr>
        <tr>
            <th scope="row">Address</th>
            <td>{{ $viewData['order']['address'] }}</td>
        </tr>
        <tr>
            <th scope="row">Credit Card</th>
            <td>{{ $viewData['order']['creditCard'] }}</td>
        </tr>
        <tr>
            <th scope="row">Date</th>
            <td>{{ $viewData['order']['created_at'] }}</td>
        </tr>
        <tr>
            <th scope="row">Price</th>
            <td>{{ $viewData['order']['price'] }}</td>
        </tr>
        <tr>
            <th scope="row">Status</th>
            <td>{{ $viewData['order']['status'] }}</td>
        </tr>

    </tbody>
</table>
@endsection