<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Shipping;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use Session;
use Cart;


class CheckoutController extends Controller
{
    public function index()
    {
        return view('front.checkout.checkout',[
            'categories'   => Category::where('status',1)->get(),

        ]);
    }

    public function checkEmailAddress()
    {
        $email = $_GET['email'];
        Customer::where('email',$email)->first();
        if($customer)
        {
            $date = [
                'success' => false,
                'message' => 'Sorry,This mail address already exists,please try another one.'
            ];
        }
        else
        {
            $date = [
                'success' => true,
                'message' => 'Sorry,This mail address available.'
            ];
        }
       
        return json_encode($date);
    }

    public function newCustomer(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->mobile = $request->mobile;
        $customer->address = $request->address;
        $customer->save();

        Session::put('customer_id', $customer->id);
        Session::put('customer_name', $customer->name);

        return redirect('/show-shipping')->with('message','Congratulation..Your Registation Was Succesfully.');
    }

    public function customerLogout(Request $request)
    {
        Session::forget('customer_id');
        Session::forget('customer_name');

        return redirect('/')->with('message','Logout Succesfully');

    }

    public function customerLogin(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();
         if($customer) {
            if (password_verify( $request->password, $customer->password)) {

                 Session::put('customer_id', $customer->id);
                 Session::put('customer_name', $customer->name);

                return redirect('/show-shipping')->with('message','Congratulation..Your Login Was Succesfully.');

            } else {
                return redirect()->back()->with('message','Sorry Your Password Is Wrong.');

            }
        }
        else
        {
            return redirect()->back()->with('message','Sorry Your Email Address Is Wrong.');
        }
    }

    public function shipping()
    {
        return view('front.checkout.shipping',[
            'categories'   => Category::where('status',1)->get(), 
            'customer'     => Customer::find( Session::get('customer_id'))
        ]);
    }
    public function newShipping(Request $request)
    {
        $shipping = new Shipping();
        $shipping->name = $request->name;
        $shipping->email = $request->email;
        $shipping->mobile = $request->mobile;
        $shipping->address = $request->address;
        $shipping->save();

        Session::put('shipping_id', $shipping->id);

        return redirect('/show-payment')->with('message','Order Shipping info Save Succesfully. Now Please Give Us Payment Information .');

    }
    public function payment()
    {
        return view('front.checkout.payment',[
            'categories'   => Category::where('status',1)->get(), 
            
        ]);
    }

    public function newOrder(Request $request)
    {
       $paymentMethod = $request->payment_method;
       if($paymentMethod == 'cash')
       {
            $order = new Order();
            $order->customer_id = Session::get('customer_id');
            $order->shipping_id = Session::get('shipping_id');
            $order->order_total = Session::get('grand_total');
            $order->order_date = date('Y-m-d');  
            $order->payment_type = $paymentMethod;
            $order->save();
            // dd($order);
            $cartProducts = Cart::content();
            foreach($cartProducts as $cartProduct)
            
            {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id       = $order->id;
                $orderDetail->product_id     = $cartProduct->id;
                $orderDetail->product_name   = $cartProduct->name;
                $orderDetail->product_image  = $cartProduct->options->image;
                $orderDetail->product_price  = $cartProduct->price;
                $orderDetail->product_qty    = $cartProduct->qty;
                $orderDetail->save();

                Cart::remove($cartProduct->rowId);

                $product = Product::find($cartProduct->id);
                $product->stock_amount = ($product->stock_amount - $cartProduct->qty);
                $product->save();
            }

            $payment = new Payment();
            $payment->order_id = $order->id;
            $payment->payment_method = $paymentMethod;
            $payment->payment_amount = 0;
            $payment->payment_date = date('Y-m-d');
            $payment->save();

            Session::put('grand_total',0);

            return redirect('/complete-order')->with('message','Your Order Info Save Successfully. We Will Contact With You Soon.');

       }
       elseif($paymentMethod == 'bkash')
       {

       }
       elseif ($paymentMethod == 'online')
       {
        return view('front.checkout.online-payment',[
            'categories'   => Category::where('status',1)->get(), 
             'customer'    => Customer::find(Session::get('customer_id')),
             'tran_id'     => rand(1,1000000)
        ]);
       }
    }

    public function confirmOnlinePayment(Request $request)
    {
        return $request->all();
    }

    public function completeOrder()
    {
        return view('front.checkout.complete-order',[
            'categories'   => Category::where('status',1)->get(), 
        ]);
    }
}


