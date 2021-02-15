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
                <div class="panel panel-body text-center" style="background-color:lightgray">
                    You Have To Login To Complete Your Valiable Order . If You Are Not Register Then Please Register first.
                </div>
            </div>
        </div>

        <div class="row">
             <div class="col-md-6">
                <div class="panel">
                <div class="panel-heading text-center" style="background-color:lightgray">
                    Login Form
                </div>
              <div class="panel-body" style="border: 1px solid lightgray">
              <form action="{{ route('customer-login') }}" method="POST" class="form-horizontal">
                @csrf
              <div class="form-group">
              <label class="col-md-3">Email</label>
              <div class="col-md-9">
              <input type="email" class="form-control" name="email"/>
              
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3">Password</label>
              <div class="col-md-9">
              <input type="password" class="form-control" name="password"/>
              
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3"></label>
              <div class="col-md-9">
              <input type="submit" class="btn btn-success" name="btn" value="LogIn"/>
              
              </div>
              </div>
              
              </form>
              
              </div>
             </div>
         </div>
         <div class="col-md-6">
                <div class="panel">
                <div class="panel-heading text-center" style="background-color:lightgray">
                    Registration Form
                </div>
              <div class="panel-body" style="border: 1px solid lightgray">
              <form action="{{ route('new-customer') }}" method="POST" class="form-horizontal">
                @csrf
              <div class="form-group">
              <label class="col-md-3">Name</label>
              <div class="col-md-9">
              <input type="text" class="form-control" name="name"/>
              
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3">Email</label>
              <div class="col-md-9">
              <input type="email" onblur="checkEmailAddress(this.value)" class="form-control" name="email"/>
              <span class="" id="emailStatusMessage"></span>
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3">Password</label>
              <div class="col-md-9">
              <input type="password" class="form-control" name="password"/>
              
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3">Mobile Number</label>
              <div class="col-md-9">
              <input type="number" class="form-control" name="mobile"/>
              
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3">Address</label>
              <div class="col-md-9">
              <textarea class="form-control" name="address"></textarea>
              
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-3"></label>
              <div class="col-md-9">
              <input type="submit" class="btn btn-success" name="btn" id="regBtn" value="Registration"/>
              
              </div>
              </div>
              
              </form>
              
              </div>
             </div>
         </div>
	  
      </div>
</div>
@endsection
