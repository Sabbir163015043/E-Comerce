<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brand.add');
    }

    public function create(Request $request)

    {
        $request->validate([
            'name'        => 'required |alpha',
            'description' => 'required'
        ]);

        $brand = new brand();
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->status = $request->status;
        $brand->save();

        return redirect()->back()->with('message','Brand Info Create Successfully');
    }

    public function manage()
    {
        return view('admin.brand.manage',['brands' => Brand::all()]);
    }
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brand.edit',['brand' => $brand]);

    }

    public function update( Request $request)
    {
        $brand = Brand::find($request->id);
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->status = $request->status;
        $brand->save();


        return redirect('/manage-brand')->with('message', 'Brand Info Update Create Succesfully');
    }

    public function delete($id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        return redirect('/manage-brand')->with('message','Brand Info Delete Succefully');
    }

}
