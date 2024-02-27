@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
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
        <th scope="row"><a href="{{ route('order.show', ['id' => $order['id']]) }}">{{ $order['id'] }}</a></th>
        <td>{{ $order['created_at'] }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection