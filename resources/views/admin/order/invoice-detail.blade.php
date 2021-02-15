@extends('admin.master')
    

@section('body')
<style>
        
            /* reset */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

/* content editable */


/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }
/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */
/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;	
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }
        </style>


<div class="row">
    <div class="col-md-12">  
    <div style="width:95%">
	<header>
			<h1>Invoice</h1>
			<address >
                <h3 style="font-size: 20px; border-bottom: 2px dotted gray; margin-bottom: 5px;">Billing Info</h3>
                </hr>
				<p>{{ $customer->name }}</p>
				<p>{{ $customer->address }}</p>
				<p>{{ $customer->mobile }}</p>
				<p>{{ $customer->email }}</p>
			</address>
            <address style="float: right">
                <h3 style="font-size: 20px; border-bottom: 2px dotted gray; margin-bottom: 5px;">Shipping Info</h3>
                </hr>
				<p>{{ $shipping->name }}</p>
				<p>{{ $shipping->address }}</p>
				<p>{{ $shipping->mobile }}</p>
				<p>{{ $shipping->email }}</p>
			</address>
			<span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address >
				<p>Some Company<br>c/o Some Guy</p>
			</address>
			<table class="meta">
				<tr>
					<th><span >Invoice #</span></th>
					<td><span >#{{$order->id}}</span></td>
				</tr>
				<tr>
					<th><span >Date</span></th>
					<td><span >{{$order->order_date}}</span></td>
				</tr>
				<tr>
					<th><span >Amount Due</span></th>
					<td><span id="prefix" ></span><span>{{number_format($order->order_total)}}</span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item</span></th>
						<th><span >Image</span></th>
						<th><span >Unit Price(Tk)</span></th>
						<th><span >Quantity</span></th>
						<th><span >Total Price(Tk)</span></th>
					</tr>
				</thead>
				<tbody>
				<?php $sum = 0; ?>
				@foreach($products as $product)
					<tr>
						<td><span>{{ $product->product_name }}</span></td>
						<td><span ><img src="{{ asset($product->product_image)}}" alt="" height="40" width="80"/></span></td>
						<td><span data-prefix></span><span >{{ $product->product_price }}</span></td>
						<td><span contenteditable>{{ $product->product_qty }}</span></td>
						<td><span data-prefix></span><span>{{ $total = $product->product_price + $product->product_qty }}</span></td>
					</tr>
					<?php $sum = $sum + $total; ?>
				@endforeach
				</tbody>
			</table>
			
			<table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix>$</span><span>{{$sum}}</span></td>
				</tr>
				<tr>
					<th><span >Vat/Tax</span></th>
					<td>
					<?php
						$vat = round((($sum * 15)/100));
					?>
					<span data-prefix>Tk. </span><span>{{$vat}}</span>
					</td>
				</tr>
				<tr>
					<th><span >Balance Due</span></th>
					<td><span data-prefix>Tk. </span><span>{{$sum+$vat}}</span></td>
				</tr>
			</table>
		</article>
		<aside>
					<h1><span >Additional Notes</span></h1>
			<div >
				<p> Note : A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
			</div>
		</aside>
	
	</div>
</div>
</div>
@endsection