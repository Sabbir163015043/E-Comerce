<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\Shipping;
use Illuminate\Http\Request;
use PDF;

class AdminOrderController extends Controller
{
    public function index()
    {
        return view('admin.order.manage',[
            'orders' => Order::orderBy('id','desc')->get()
        ]);
    }

    public function viewOrderDetail($id)
  
    {
        $order = Order::find($id);        
        return view('admin.order.order-detail',[
            'order'      => $order,
            'products'   => OrderDetail::where('order_id', $order->id)->get(),
            'customer'   => Customer:: find($order->customer_id),
            'shipping'   => Shipping:: find($order->shipping_id),
            'payment'    => Payment :: where ('order_id', $order->id)->first(),
        ]);
    }
    public function viewOrderInvoice($id)
    {
        $order = Order::find($id);
        
        return view('admin.order.invoice-detail',[
            'order'      => $order,
            'products'   => OrderDetail::where('order_id', $order->id)->get(),
            'customer'   => Customer:: find($order->customer_id),
            'shipping'   => Shipping:: find($order->shipping_id),
        ]);
    }

    public function downloadOrderInvoice($id)
    {
        $order = Order::find($id);
        $pdf = PDF::loadView('admin.pdf.invoice',[
            'order'      => $order,
            'products'   => OrderDetail::where('order_id', $order->id)->get(),
            'customer'   => Customer:: find($order->customer_id),
            'shipping'   => Shipping:: find($order->shipping_id),
        ]);
        return $pdf->stream('invoice.pdf');
        return $pdf->download('invoice.pdf');
    }
    public function editOrder($id)
    {
        $order = Order::find($id);
        
        return view('admin.order.edit',[
            'order'      => $order,
            'products'   => OrderDetail::where('order_id', $order->id)->get(),
            'customer'   => Customer:: find($order->customer_id),
            'shipping'   => Shipping:: find($order->shipping_id),
        ]);
    }
    public function updateOrder(Request $request)
    {
        $order = Order::find($request->id);
        $order->order_status = $request->order_status;
        $order->payment_status = $request->payment_status;
        $order->save();

        if($request->order_status == 'Complete')

        {
            $payment = Payment::where('order_id', $request->id)->first();
            $payment -> payment_amount = $request->amount;
            $payment -> payment_date = date(format:'Y-m-d');
            $payment->save();   
        }
      
        return redirect('/manage-order')->with('message', 'Order status and payment info Succesfully');
    }
}









