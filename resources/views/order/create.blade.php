@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="container">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Order</div>
            <div class="card-body">
                <form method="POST" action="{{ route('order.save') }}">
                    @csrf
                    <input type="text" class="form-control mb-2" placeholder="Enter address" name="address"
                        value="{{ old('address') }}" />
                    <input type="text" class="form-control mb-2" placeholder="Enter credit card" name="creditCard"
                        value="{{ old('creditCard') }}" />
                    <input type="text" class="form-control mb-2" placeholder="Enter price" name="price"
                        value="{{ old('price') }}" />
                    <input type="submit" class="btn btn-primary" value="Send" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection