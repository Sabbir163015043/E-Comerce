<?php

namespace App\Http\Controllers;


use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubImage;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.add',[
                'categories'  => Category::all(),
                'brands'      => Brand::all(),
        ]);
        
    }
    public function create(Request $request)
    {
        $image   = $request->file('image');
        $imgName = $image->getClientOriginalName();
        // dd($imgName);


        $directory ='product-images/';
        $image ->move($directory, $imgName);
        $imgUrl = $directory.$imgName;

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->name = $request->name;
        $product->code = $request->code;
        $product->price = $request->price;
        $product->stock_amount = $request->stock_amount;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->image = $imgUrl;
        $product->status = $request->status;
        $product->save();

        $images = $request->file('sub_image');
        foreach($images as $image)
        {
        
        $imgName = $image->getClientOriginalName();
        $directory ='product-sub-images/';
        $image ->move($directory,$imgName);
        $imgUrl = $directory.$imgName;

        $subImage = new SubImage();
        $subImage->product_id = $product->id;
        $subImage->sub_image = $imgUrl;
        $subImage->save();


        }

        return redirect()->back()->with('message','Product info create succesfully');

    }

    public function manage()
    {
        return view('admin.product.manage',['products' => Product::all()]);
    }

    public function detail($id)
    {
        return view('admin.product.detail',['product' => Product::find($id)]);
    }

    public function edit($id)
    {
        return view('admin.product.edit',[
            'product' => Product::find($id),
            'categories'  => Category::all(),
             'brands'      => Brand::all(),
            
            ]);

    }
    public function update(Request $request)
    {
        $product = Product::find($request->id);
        if($image   = $request->file('image'))
        {
            if(file_exists($product->image))
            {
                unlink($product->image);
            }
            $imgName = $image->getClientOriginalName();
            $directory ='product-images/';
            $image ->move($directory, $imgName);
            $imgUrl = $directory.$imgName;
        }
        else
        {
            $imgUrl = $product->image;
        }

       

        
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->name = $request->name;
        $product->code = $request->code;
        $product->price = $request->price;
        $product->stock_amount = $request->stock_amount;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->image = $imgUrl;
        $product->status = $request->status;
        $product->save();

        if ($images = $request->file('sub_image'))
            {
                $subImages = SubImage::where('product_id',$product->id)->get();
                foreach($subImages as $subImage)
                {
                    if(file_exists($subImage->sub_image))
                    {
                        unlink($subImage->sub_image);
                    }
                    $subImage->delete();
                }

                foreach($images as $image)
                {
                $imgName = $image->getClientOriginalName();
                $directory ='product-sub-images/';
                $image ->move($directory,$imgName);
                $imgUrl = $directory.$imgName;
                
                $subImage = new SubImage();
                $subImage->product_id = $product->id;
                $subImage->sub_image = $imgUrl;
                $subImage->save();
                        
                }
            }
     return redirect('/manage-product')->with('message','Product info update succesfully');
        
    }
}
    
    