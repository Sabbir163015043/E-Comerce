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
              <div class="panel-body" style="border: 1px solid lightgray">
              <h2>Congratulation.. Your Order Has Being Sussesfully . We Will Contact As Soon As Possible..</h2>
              </div>
             </div>
         </div>
	  
      </div>
@endsection
