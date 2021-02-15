@extends('admin.master')


@section('body')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Category</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Edit Category</a>
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
                <form action="{{ route('update-category', $category ->id) }}" method="POST">
@csrf
<div class="row">
    <div class="col-md-12">
      <div class="card card-body rounded-0">
        <div class="form-group row">
            <label class="control-label col-md-6"> Category Name </lable>
                <div class="col-md-12">
                    <input type="text" value="{{ $category->name}}" name="name" class="form-control"/>
                    <input type="hidden" name="id" value="{{ $category ->id }}"/>
     </div>
    </div>
    <div class="form-group row">
            <label class="control-label col-md-8"> Category Description </lable>
                <div class="col-md-12">
                    <textarea name="description"  class="from-control">{{ $category->description}}</textarea>
     </div>
    </div>
    <div class="form-group row">
            <label class="control-label col-md-12"> Publication Status </lable>
                <div class="col-md-12">
                <Label><input type="radio" name="status" {{ $category->status == 1 ? 'checked' : ''}} value="1"/> Published </Label>
                <Label><input type="radio" name="status" {{ $category->status == 0 ? 'checked' : ''}} value="0"/> UnPublished </Label>
         </div>
    </div>
    <div class="form-group row">
            <label class="control-label col-md-2"> </lable>
                <div class="col-md-10">
                    <input type="submit" name="btn" class="btn btn-success" value="Upadte Category info"/>
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