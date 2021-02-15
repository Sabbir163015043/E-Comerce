@extends('front.master')

@section('body')
<div class="men">
	<div class="container">
    <div class="row">
            <div class="col-md-12">
                <div class="panel panel-body text-center" style="background-color:lightgray">
                Please give us your shipping info. If billing address & shipping address is same .
                </div>
            </div>
        </div>
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
                    Shipping Info Form
                </div>
              <div class="panel-body" style="border: 1px solid lightgray">
              <form action="{{ route('new-shipping') }}" method="POST" class="form-horizontal">
                @csrf
              <div class="form-group">
              <label class="col-md-3">Name</label>
              <div class="col-md-9">
              <input type="text" value="{{ $customer->name }}" class="form-control" name="name"/>
              
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3">Email</label>
              <div class="col-md-9">
              <input type="email" value="{{ $customer->email }}" class="form-control" name="email"/>
              
              </div>
              </div>
              
              <div class="form-group">
              <label class="col-md-3">Mobile Number</label>
              <div class="col-md-9">
              <input type="number" value="{{ $customer->mobile }}" class="form-control" name="mobile"/>
              
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3">Address</label>
              <div class="col-md-9">
              <textarea class="form-control" name="address">{{ $customer->address }}</textarea>
              
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3"></label>
              <div class="col-md-9">
              <input type="submit" class="btn btn-success" name="btn" value="Save Shipping Info"/>
              
              </div>
              </div>
              
              </form>
              
              </div>
             </div>
         </div>
	  
      </div>
</div>
@endsection
