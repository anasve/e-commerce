{{-- resources/views/admin/dashboard.blade.php --}}

@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Admin Dashboard</h4>
                </div>
                <div class="card-body">
                    <p>Welcome, {{ Auth::user()->name }} You have access to the admin dashboard.</p>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header">Manage Products</div>
                                <div class="card-body">
                                    <a href="{{ route('products.index') }}" class="btn btn-primary">View Products</a>
                                    <a href="{{ route('products.create') }}" class="btn btn-success">Add Product</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header">Manage Categories</div>
                                <div class="card-body">
                                    <a href="{{ route('categories.index') }}" class="btn btn-primary">View Categories</a>
                                    <a href="{{ route('categories.create') }}" class="btn btn-success">Add Category</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header">Manage Orders</div>
                                <div class="card-body">
                                    <a href="{{ route('orders.index') }}" class="btn btn-primary">View Orders</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header">Manage Users</div>
                                <div class="card-body">
                                    <a href="{{ route('users.index') }}" class="btn btn-primary">View Users</a>
                                    <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
