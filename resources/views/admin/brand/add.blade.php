@extends('admin.master')


@section('body')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Brand</h1>
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
<form action="{{ route('new-brand') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-12">
      <div class="card card-body rounded-0">
        <div class="form-group row">
            <label class="control-label col-md-6"> Brand Name </lable>
                <div class="col-md-12">
                    <input type="text" name="name" class="form-control"/>
                    <span>{{ $errors->has('name') ? $errors->first('name') : '' }}</span>

     </div>
    </div>
    <div class="form-group row">
            <label class="control-label col-md-6"> Brand Description </lable>
                <div class="col-md-12">
                    <textarea name="description" class="from-control"></textarea>
                    <span>{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
     </div>
    </div>
    <div class="form-group row">
            <label class="control-label col-md-12"> Publication Status </lable>
                <div class="col-md-12">
                <Label><input type="radio" name="status" value="1"/> Published </Label>
                <Label><input type="radio" name="status" value="0"/> UnPublished </Label>
         </div>
    </div>
    <div class="form-group row">
            <label class="control-label col-md-2"> </lable>
                <div class="col-md-10">
                    <input type="submit" name="btn" class="btn btn-success" value="Creatre New Brand"/>
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