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
                <form action="{{ route('update-order') }}" method="POST">
           @csrf

        <div class="form-group row">
            <label class="control-label col-md-6"> Order Status :</lable>
                <div class="col-md-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="order_status" id="inlineCheckbox1" value="complete">
                    <label class="form-check-label" for="inlineCheckbox1"> Complete </label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="order_status" id="inlineCheckbox2" value="cancel">
                    <label class="form-check-label" for="inlineCheckbox2"> Cancel </label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="order_status" id="inlineCheckbox3" value="pending">
                    <label class="form-check-label" for="inlineCheckbox3"> Pending </label>
                    </div>
     </div>
    </div>
    <div class="form-group row">
            <label class="control-label col-md-8"> Payment Status :</lable>
                <div class="col-md-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="payment_status" id="inlineCheckbox11" value="complete">
                    <label class="form-check-label" for="inlineCheckbox11">Complete</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="payment_status" id="inlineCheckbox22" value="cancel">
                    <label class="form-check-label" for="inlineCheckbox22">Cancel</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="payment_status" id="inlineCheckbox33" value="pending">
                    <label class="form-check-label" for="inlineCheckbox33">Pending</label>
                    </div>
                    
     </div>
    </div>
    <div class="form-group row">
            <label class="control-label col-md-12"> Received Amount : </lable>
                <div class="col-md-10">
                <input type = "number" value = "{{$order->order_total}}" readonly name="amount" class="form-control"/>
                <input type = "hidden" value ="{{$order->id}}" name="id"/>
         </div>
    </div>
    <div class="form-group row">
            <label class="control-label col-md-2"> </lable>
                <div class="col-md-10">
                    <input type="submit" name="btn" class="btn btn-success" value="Update Order Info"/>
     </div>
    </div>
</form>
        
        </div>
    
    </div>
            </div>
        </div>
    </div>
</div>

@endsection