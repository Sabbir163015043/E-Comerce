@extends('admin.master')


@section('body')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Product </h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Add Category</a>
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
                
        <form action="{{ route('update-product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
                    <label class="control-label col-md-6"> Category Name </lable>
                        <div class="col-md-10">
                            <select class="from-control" name="category_id">
                                <option> ---Select Product Category--- </option>
                                    @foreach($categories as $key => $category)
                                    <option value="{{ $category->id }}"{{ $product->category_id == $category->id ? 'selected' : ''}}>{{$category->name }}</option>
                                    @endforeach
                            </select>
                            </div>

                            <div class="form-group row">
                    <label class="control-label col-md-6"> Brand Name </lable>
                        <div class="col-md-10">
                            <select class="from-control" name="brand_id">
                                <option> ---Select Brand Category--- </option>
                                @foreach($brands as $key => $brand)
                                    <option value="{{ $brand->id }}"{{ $product->brand_id == $brand->id ? 'selected' : ''}}>{{$brand->name }}</option>
                                    @endforeach
                            </select>
                            </div>
        <div class="form-group row">
                    <label class="control-label col-md-6"> Product Name </lable>
                        <div class="col-md-12">
                            <input type="text" name="name" value="{{ $product->name }}" class="form-control"/>
                            <input type="hidden" name="id" value="{{ $product->id }}"/>
                            </div>
                            <div class="form-group row">
                    <label class="control-label col-md-12"> Product Code </lable>
                        <div class="col-md-12">
                            <input type="text" name="code" value="{{ $product->code }}" class="form-control"/>
                            </div>
                    <div class="form-group row">      
                     <label class="control-label col-md-12"> Product Price </lable>
                        <div class="col-md-12">
                           <input type="number" name="price" value="{{ $product->price }}" class="form-control"/>
                            </div>
                    <div class="form-group row">      
                     <label class="control-label col-md-12"> Stock Amount </lable>
                        <div class="col-md-12">
                        <input type="number" name="stock_amount" value="{{ $product->stock_amount }}" class="form-control"/>
                            </div>
 
            <div class="form-group row">
                    <label class="control-label col-md-12"> Short Description </lable>
                        <div class="col-md-12">
                            <textarea name="short_description"  class="from-control">{{ $product->short_description }}</textarea>
                            </div>  
             <div class="form-group row">
                    <label class="control-label col-md-12"> Long Description </lable>
                        <div class="col-md-12">
                        <textarea name="long_description"  class="from-control">{{ $product->long_description }}</textarea>
                            </div>   
             
                <div class="form-group row">
                    <label class="control-label col-md-12"> Main Image </lable>
                        <div class="col-md-12">
                            <input type="file" name="image" class="form-control-file" accepte="image/*" />
                            <img src="{{ asset($product->image) }}" height="60" width="90" alt="">
                            </div>  
            <div class="form-group row">
            <label class="control-label col-md-12"> Sub Images </lable>
                        <div class="col-md-12">
                            <input type="file" name="sub_image[]" multiple accept="image/*" class="form-control-file"/>
                            @foreach($product->subImages as $key =>$subImage)
                             <img src="{{ asset($subImage->sub_image) }}" alt="" height="60" width="80"/>
                             @endforeach
                            </div>  
            </div>
           
            </div>

            <div class="form-group row">
                    <label class="control-label col-md-12"> Publication Status </lable>
                        
                        <Label><input type="radio" name="status"{{ $product->status == 1 ? 'checked' : ''}} value="1"/> Published </Label>
                        <Label><input type="radio" name="status" {{ $product->status == 0 ? 'checked' : ''}} value="0"/> UnPublished </Label>
                </div> 
            <div class="form-group row">
                    <label class="control-label col-md-2"> </lable>
                        <div class="col-md-10">
                            <input type="submit" name="btn" class="btn btn-success" value="Update Product Info"/>
            </div>
            </div>
    
            
            </div>
            </div>

        </div>

        </form>
                
                </div>
            </div>
        </div>


@endsection