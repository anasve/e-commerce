{{-- resources/views/customer/products.blade.php --}}
@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="container">
    <h1 class="my-4">Available Products</h1>

    {{-- Display the products list --}}
    <div id="products-list" class="row"></div>

    {{-- Order Form --}}
    <div class="mt-5">
        <h2>Place an Order</h2>
        <form id="order-form">
            @csrf
            <div class="form-group">
                <label for="productSelect">Select Products</label>
                <select multiple id="productSelect" class="form-control" name="product_ids[]">
                    {{-- Options will be populated via JavaScript --}}
                </select>
            </div>
            <button type="submit" class="btn btn-success">Place Order</button>
        </form>
        <div id="order-result" class="mt-3"></div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fetch products
        fetchProducts();

        // Handle the order form submission
        document.getElementById('order-form').addEventListener('submit', function(event) {
            event.preventDefault();
            placeOrder();
        });
    });

    // Function to fetch products from the API
    function fetchProducts() {
        fetch('/api/products')
            .then(response => response.json())
            .then(data => {
                const productsList = document.getElementById('products-list');
                const productSelect = document.getElementById('productSelect');
                productsList.innerHTML = '';
                data.forEach(product => {
                    // Add product to the list display
                    const productCard = `<div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">${product.name}</h5>
                                <p class="card-text">Price: $${product.price}</p>
                            </div>
                        </div>
                    </div>`;
                    productsList.insertAdjacentHTML('beforeend', productCard);

                    // Add product to the order select dropdown
                    const option = document.createElement('option');
                    option.value = product.id;
                    option.text = product.name;
                    productSelect.add(option);
                });
            })
            .catch(error => console.error('Error fetching products:', error));
    }

    // Function to place an order using the API
    function placeOrder() {
        const selectedProducts = Array.from(document.getElementById('productSelect').selectedOptions).map(opt => opt.value);

        fetch('/api/orders', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ product_ids: selectedProducts })
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById('order-result').innerHTML = `<p class="text-success">${data.message}</p>`;
        })
        .catch(error => console.error('Error placing order:', error));
    }
</script>
@endpush
