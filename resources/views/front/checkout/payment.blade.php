@extends('front.master')

@section('body')
<div class="men">
	<div class="container">
    @if($message = Session::get('message'))
    <div class="row">
            <div class="col-md-12">
                <div class="panel panel-body text-center" style="background-color:lightgray">
                    {{ $message }}
                </div>
            </div>
        </div>
    @endif
        <div class="row">
             
         <div class="col-md-12">
                <div class="panel">
                <div class="panel-heading text-center" style="background-color:lightgray">
                    Please Select Payment Method
                </div>
              <div class="panel-body" style="border: 1px solid lightgray">
              <form action="{{ route('new-order') }}" method="POST" class="form-horizontal">
                @csrf
                <table class="table table-bordard" style="border: 1px solid lightgray;">
                    <tr>
                        <th>Cash On Delivery</th>
                        <td><input type="radio" name="payment_method" value="cash"></td>
                    </tr>
                    <tr>
                        <th>Bkash</th>
                        <td><input type="radio" name="payment_method" value="bkash"></td>
                    </tr>
                    <tr>
                        <th>Online</th>
                        <td><input type="radio" name="payment_method" value="online"></td>
                    </tr>
                </table>


              <div class="form-group">
              <label class="col-md-3"></label>
              <div class="col-md-9">
              <input type="submit" class="btn btn-success" name="btn" value="Confirm Order"/>
              
              </div>
              </div>
              
              </form>
              
              </div>
             </div>
         </div>
	  
      </div>
</div>
@endsection
