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
        <th scope="row"><a href="{{ route('order.show', ['id' => $order['id']]) }}">{{ $order['created_at'] }}</a></th>
        <td>Mark</td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection