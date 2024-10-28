{{-- resources/views/customer/create_order.blade.php --}}
@extends('layouts.app')

@section('title', 'Place Order')

@section('content')
<div class="container">
    <h1>Place a New Order</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="productSelect">Select Products:</label>
            <select name="product_ids[]" id="productSelect" class="form-control" multiple required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }} - ${{ $product->price }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Place Order</button>
    </form>
</div>
@endsection
