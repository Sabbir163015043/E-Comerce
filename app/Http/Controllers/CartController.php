<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $product = Product::find($request->id);
        Cart::add([
             'id'   => $product->id,
             'name' => $product->name,
              'qty' => $request->qty,
            'price' => $product->price,
            'weight' => 0,
            'options' => [
            'image' => $product->image
                 ]
              ]);
              return redirect('/show-cart');

    }

        public function directAddToCart($id)
        {
            $product = Product::find($id);
            Cart::add([
             'id'   => $product->id,
             'name' => $product->name,
              'qty' => 1,
            'price' => $product->price,
            'weight' => 0,
            'options' => [
            'image' => $product->image
                 ]
              ]);
              return redirect('/show-cart');
        }

     public function show()
     {
         $cartProducts = Cart::content();
         return view('front.cart.show',[
            'categories'   => Category::where('status',1)->get(),
            'cartProducts' => $cartProducts
         ]);
     }

     public function update(Request $request)
     {
         Cart::update($request->rowId, $request->qty);
         return redirect('/show-cart')->with('message','Cart product info update successfully.');

     }

     public function remove($rowId)
     {
         Cart::remove($rowId);
         return redirect('/show-cart')->with('message','Cart product info remove successfully.');
     }
}
