@extends('admin.master')


@section('body')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Product</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> View Product Detail</a>
                    </div>  


<div class="row">
    <div class="col-md-12">
        <div class="card card-body rounded-0">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>Product Name</th>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <th>Product Code</th>
                    <td>{{ $product->code }}</td>
                </tr>
                <tr>
                    <th>Product Category Name</th>
                    <td>{{ $product->category->name }}</td>
                </tr>
                    <tr>
                    <th>Product Brand Name</th>
                    <td>{{ $product->brand->name }}</td>
                </tr>
                 <tr>
                    <th>Product Price</th>
                    <td>{{ $product->price }}</td>
                </tr>
                <tr>
                    <th>Product Stock Amount</th>
                    <td>{{ $product->stock_amount }}</td>
                </tr>
                <tr>
                    <th>Product Short Description</th>
                    <td>{{ $product->short_description }}</td>
                </tr>
                <tr>
                    <th>Product Long Description</th>
                    <td>{{ $product->long_description }}</td>
                </tr>
                <tr>
                    <th>Product Image</th>
                    <td><img src="{{ asset($product->image) }}" alt=""height="250" width="250"/></td>
                </tr>
                <tr>
                    <th>Product Sub Image</th>
                    <td>
                        @foreach($product->subImages as $key =>$subImage)
                        <img src="{{ asset($subImage->sub_image) }}" alt="" height="200" width="200"/>
                        @endforeach
                    </td>
                </tr>
            </table>
        </div>
            <div>
            </div>
        </div>

        @endsection