@extends('admin.master')


@section('body')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Product</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> All Product</a>
                    </div>  


<div class="row">
    <div class="col-md-12">
        <div class="card card-body rounded-0">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>SL NO</th>
                    <th>Category Name</th>
                    <th>Brand Name</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                    <th>Stock Amount</th>
                    <th>Publication Status</th>
                    <th>Action</th>
                </tr>
                @foreach($products as $key => $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->category ->name }}</td>
                    <td>{{ $product->brand ->name }}</td>
                    <td>{{ $product->name }}</td>
                    <td><img src="{{ asset($product->image) }}" alt="" height="60" width="90"></td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock_amount }}</td>
                    <td>{{ $product->status == 1 ? 'published' : 'Unpublished' }}</td>
                    <td>
                        <a href="{{ route('view-product-detail',['id' =>$product->id]) }}" class="btn btn-success btn-sm">View </a>
                        <a href="{{ route('edit-product',['id' => $product->id]) }}" class="btn btn-success btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
            <div>
            </div>
        </div>

        @endsection