@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif

@if (Session::has('alert'))
    <div class="alert alert-warning" role="alert">
        {{ Session::get('alert') }}
    </div>
@endif


<table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Date</th>
        </tr>
    </thead>

    @foreach ($viewData['orders'] as $order)
    <tbody>
        <tr>
        <th scope="row"><a href="{{ route('order.show', ['id' => $order['id']]) }}">{{ $order->getId() }}</a></th>
        <td>{{ $order->getCreated_at() }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection