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
                
        <form action="{{ route('new-product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
                    <label class="control-label col-md-6"> Category Name </lable>
                        <div class="col-md-10">
                            <select class="from-control" name="category_id">
                                <option> ---Select Product Category--- </option>
                                    @foreach($categories as $key => $category)
                                    <option value="{{ $category->id }}">{{$category->name }}</option>
                                    @endforeach
                            </select>
                            </div>

                            <div class="form-group row">
                    <label class="control-label col-md-6"> Brand Name </lable>
                        <div class="col-md-10">
                            <select class="from-control" name="brand_id">
                                <option> ---Select Brand Category--- </option>
                                @foreach($brands as $key => $brand)
                                    <option value="{{ $brand->id }}">{{$brand->name }}</option>
                                    @endforeach
                            </select>
                            </div>
        <div class="form-group row">
                    <label class="control-label col-md-6"> Product Name </lable>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control"/>
                            </div>
                            <div class="form-group row">
                    <label class="control-label col-md-12"> Product Code </lable>
                        <div class="col-md-12">
                            <input type="text" name="code" class="form-control"/>
                            </div>
                    <div class="form-group row">      
                     <label class="control-label col-md-12"> Product Price </lable>
                        <div class="col-md-12">
                           <input type="number" name="price" class="form-control"/>
                            </div>
                    <div class="form-group row">      
                     <label class="control-label col-md-12"> Stock Amount </lable>
                        <div class="col-md-12">
                        <input type="number" name="stock_amount" class="form-control"/>
                            </div>
 
            <div class="form-group row">
                    <label class="control-label col-md-12"> Short Description </lable>
                        <div class="col-md-12">
                            <textarea name="short_description" class="from-control"></textarea>
                            </div>  
             <div class="form-group row">
                    <label class="control-label col-md-12"> Long Description </lable>
                        <div class="col-md-12">
                        <textarea name="long_description" class="from-control"></textarea>
                            </div>   
             
                <div class="form-group row">
                    <label class="control-label col-md-12"> Main Image </lable>
                        <div class="col-md-12">
                            <input type="file" name="image" class="form-control-file" accepte="image/*" />
                            </div>  
            <div class="form-group row">
            <label class="control-label col-md-12"> Sub Images </lable>
                        <div class="col-md-12">
                            <input type="file" name="sub_image[]" multiple accept="image/*" class="form-control-file"/>
                            </div>  
            </div>
           
            </div>

            <div class="form-group row">
                    <label class="control-label col-md-12"> Publication Status </lable>
                        
                        <Label><input type="radio" name="status" value="1"/> Published </Label>
                        <Label><input type="radio" name="status" value="0"/> UnPublished </Label>
                </div> 
            <div class="form-group row">
                    <label class="control-label col-md-2"> </lable>
                        <div class="col-md-10">
                            <input type="submit" name="btn" class="btn btn-success" value="Creatre New Category"/>
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