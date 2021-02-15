@extends('admin.master')


@section('body')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Order</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Manage Order</a>
                    </div>  


<div class="row">
    <div class="col-md-12">
        <div class="card card-body rounded-0">
        @if($message = Session::get('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @endif
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>SL NO</th>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Mobile Number</th>
                    <th>Order Total</th>
                    <th>Order Date</th>
                    <th>Payment Type</th>
                    <th>Payment Status</th>
                    <th>Order Status</th>
                    <th>Action</th>
                </tr>
                @foreach($orders as $key => $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->customer->name }}</td>
                    <td>{{ $order->customer->mobile }}</td>
                    <td>{{ $order->order_total }}</td>
                    <td>{{ $order->order_date }}</td>
                    <td>{{ $order->payment_type }}</td>
                    <td>{{ $order->payment_status }}</td>
                    <td>{{ $order->order_status }}</td>
                    <td>
                        <a href="{{ route('view-order-detail',['id'=>$order->id]) }}" class="btn btn-success btn-sm">View Detail</a>
                        <a href="{{ route('view-order-invoice',['id'=>$order->id]) }}" class="btn btn-success btn-sm">View Order Invoice</a>
                        <a href="{{ route('download-order-invoice',['id'=>$order->id]) }}" class="btn btn-success btn-sm">Download Invoice</a>
                        <a href="{{ route('edit-order',['id'=>$order->id]) }}" class="btn btn-success btn-sm">Edit Order</a>
                        <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Are your Sure this file delete')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
            <div>
            </div>
        </div>
    </div>

</div>

@endsection