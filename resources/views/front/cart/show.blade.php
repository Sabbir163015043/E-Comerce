@extends('front.master')

@section('body')
<div class="men">
	<div class="container">
        <div class="row">
             <div class="col-md-12">
                <div class="panel panel-body">
                <h2 class="text-center" style="margin-bottom:40px;"> {{ Session::get('message') }} </h2>
                    <h2 class="text-center" style="margin-bottom:40px;"> All Cart Product Info </h2>
                    <table class="table table-bordered table-hover"style="border: 1px solid lightgray;">
                        <tr>
                            <th>SL No</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Product Quentity</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                        <?php $sum = 0; ?>
                        @foreach($cartProducts as $key => $cartProduct)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $cartProduct->name }}</td>
                            <td><img src="{{ asset($cartProduct->options->image ) }}" alt="" height="60" width="100"/></td>
                            <td>{{ $cartProduct->price }}</td>
                            <td>
                                <form action="{{ route('update-cart-product') }}" method="POST">
                                @csrf
                                <input type="number" value="{{ $cartProduct->qty }}"name="qty" min="1"/>
                                <input type="hidden" value="{{ $cartProduct->rowId }}" name="rowId"/>
                                <input type="submit" value="Update"/>
                                </form>
                            </td>
                            <td>{{ number_format(($cartProduct->qty * $cartProduct->price)) }}</td>
                            <td>
                                <a href="{{ route('remove-cart-product',['rowId' => $cartProduct->rowId ]) }}" class="btn btn-danger">Remove</a>
                            </td>
                        </tr>
                        <?php 
                            $sum = $sum + ($cartProduct->qty * $cartProduct->price)
                        ?>
                        @endforeach
                    </table>
                    <hr style="border: 1px solid lightgray;"/>
                    <table class="table table-bordered" style="width:40%;margin-left:60%;border: 1px solid lightgray;"> 
                        <tr>
                            <th>Sub Total</th>
                            <td>{{ number_format(round($sum)) }}</td>
                        </tr>
                        <tr>
                            <th>Vat / Tax</th>
                            <td>
                                <?php
                                $vat = round((($sum * 3)/100));
                                echo $vat;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Shipping Cost</th>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th>Grand Total</th>
                            <td>
                                {{number_format( $grandTotal = $sum + $vat) }}
                            <?php 
                                Session::put('grand_total', $grandTotal);
                            ?>
                            </td>
                        </tr>
                    </table>
                    <div style="margin-top:30px;">
                        <a href="{{ route('/') }}" class="btn btn-success"> Continue Shopping</a>
                        @if(Session::get('customer_id'))
                        <a href="{{ route('show-shipping') }}"class="btn btn-success pull-right">Checkout</a>
                        @else
                        <a href="{{ route('checkout') }}"class="btn btn-success pull-right">Checkout</a>
                        @endif
                    </div>
                </div>
             </div>
         </div>
	  
      </div>
</div>
@endsection
