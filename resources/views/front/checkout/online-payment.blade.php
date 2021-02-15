@extends('front.master')

@section('body')
<div class="men">
	<div class="container">
        @if($message = Session::get('message'))
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-body text-center" style="background-color: lightgray">
                    {{$message}}
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading text-center" style="background-color: lightgray">
                         Online Payment Form
                    </div>
                    <div class="panel-body" style="border: 1px solid lightgray">
                        <form action="https://sandbox.aamarpay.com/index.php" method="POST">
                                @csrf
                                <input type="hidden" name="store_id" value="aamarpay"/>
                                <input type="hidden" name="signature_key" value="28c78bb1f45112f5d40b956fe104645a"/>
                                <input type="hidden" name="tran_id" value="ZLMC-{{ $tran_id }}"/>
                                <input type="hidden" name="amount" value="100"/>
                                <input type="hidden" name="currency" value="BDT"/>
                                <input type="hidden" name="cus_name" value="{{ $customer->name }}"/>
                                <input type="hidden" name="cus_email" value="{{ $customer->email }}"/>
                                <input type="hidden" name="cus_add1" value="Dhaka"/>
                                <input type="hidden" name="cus_add2" value="Dhaka"/>
                                <input type="hidden" name="cus_city" value="Dhaka"/>
                                <input type="hidden" name="cus_postcode" value="1206"/>
                                <input type="hidden" name="cus_country" value="Bangladesh"/>
                                <input type="hidden" name="cus_phone" value="{{ $customer->mobile }}"/>
                                <input type="hidden" name="cus_fax" value="010000000"/>
                                <input type="hidden" name="amount_vatratio" value="0"/>
                                <input type="hidden" name="amount_vat" value="0"/>
                                <input type="hidden" name="amount_taxratio" value="0"/>
                                <input type="hidden" name="amount_tax" value="0"/>
                                <input type="hidden" name="amount_processingfee_ratio" value="0"/>
                                <input type="hidden" name="amount_processingfee" value="0"/>
                                <input type="hidden" name="desc" value="Online Payment"/>
                                <input type="hidden" name="success_url" value="http://localhost/ecommerce6/public/confirm-online-payment"/>
                                <input type="hidden" name="fail_url" value = "http://pay.workupdate.club/payment_fail_page.php"/>
                                <input type="hidden" name="cancel_url" value = "http://pay.workupdate.club/payment_fail_page.php"/>
                                <button type="submit" class="btn btn-primary border cursor rounded-0 lead-font-family">Confirm Order</button>
                        </form>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
@endsection
