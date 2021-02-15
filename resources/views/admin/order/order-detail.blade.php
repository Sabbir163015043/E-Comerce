@extends('admin.master')

@section('body')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Order Details</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Order Detail</a>
                    </div>  

<div class="row">
    <div class="col-md-12">  
        <h3>Order Info</h3>
        <div class="card card-body rounded-0">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>Order No</th>
                    <th>Order Date</th>
                    <th>Order Total</th>
                    <th>Order Payment Type</th>
                    <th>Order Payment Status</th>
                    <th>Order Status</th>
                </tr>
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->order_date }}</td>
                    <td>{{ $order->order_total }}</td>
                    <td>{{ $order->payment_type }}</td>
                    <td>{{ $order->payment_status }}</td>
                    <td>{{ $order->order_status }}</td>
                </tr>
            </table>
            </div>
            </div>
            <h3>Order Customer Info</h3>
                <div class="card card-body rounded-0">
                 <div class="table-responsive">
                 <table class="table table-bordered">
                <tr>
                    <th>Customer Name</th>
                    <th>Mobile No</th>
                    <th>Email Address</th>
                    <th>Address</th>
                </tr>
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->mobile }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->address }}</td>
                </tr>
            </table>
        </div>
    </div>
    <h3>Order Shipping Info</h3>
                <div class="card card-body rounded-0">
                 <div class="table-responsive">
                 <table class="table table-bordered">
                <tr>
                    <th>Shipping Name</th>
                    <th>Mobile Number</th>
                    <th>Email Address</th>
                    <th>Address</th>
                </tr>
                <tr>
                    <td>{{ $shipping->name }}</td>
                    <td>{{ $shipping->mobile }}</td>
                    <td>{{ $shipping->email }}</td>
                    <td>{{ $shipping->address }}</td>
                </tr>
            </table>
        </div>
    </div>
    <h3>Order Payment Info</h3>
        <div class="card card-body rounded-0">
        <div class="table-responsive">
        <table class="table table-bordered">
                <tr>
                    <th>Payment Type</th>
                    <th>Payment Amount</th>
                    <th>Payment Date</th>
                </tr>
                <tr>
                    <td>{{ $payment->payment_method }}</td>
                    <td>{{ $payment->payment_amount }}</td>
                    <td>{{ $payment->payment_date }}</td>
                </tr>
            </table>
            </div>
            </div>
            <h3>Order Product Info</h3>
            <div class="card card-body rounded-0">
            <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>SL NO</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total Price</th>
                </tr>
                @foreach($products as $key => $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td><img src ="{{ asset($product->product_image)}}" alt="" height="50" width="98"/></td>
                    <td>{{ $product->product_qty }}</td>
                    <td>{{ $product->product_price }}</td>
                    <td>{{ ($product->product_price * $product->product_qty) }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    <div>
</div>
</div>
@endsection