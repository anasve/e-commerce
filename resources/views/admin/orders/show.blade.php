@extends('layouts.app')

@section('title', 'Order Details')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Order Details</h4></div>
                <div class="card-body">
                    <p><strong>Order ID:</strong> {{ $order->id }}</p>
                    <p><strong>User:</strong> {{ $order->user->name }}</p>
                    <p><strong>Total:</strong> ${{ $order->total }}</p>
                    <p><strong>Status:</strong> {{ $order->status }}</p>

                    <h5>Products:</h5>
                    <ul>
                        @foreach($order->products as $product)
                            <li>{{ $product->name }} - ${{ $product->pivot->price }} x {{ $product->pivot->quantity }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
