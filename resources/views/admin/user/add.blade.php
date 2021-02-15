@extends('admin.master')


@section('body')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">User Module</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Add User</a>
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
                <form action="{{ route('new-user') }}" method="POST">
@csrf
<div class="row">
    <div class="col-md-12">
      <div class="card card-body rounded-0">
        <div class="form-group row">
            <label class="control-label col-md-2"> User Name </lable>
                <div class="col-md-10">
                    <input type="text" name="name" class="form-control"/>

     </div>
    </div>
    <div class="form-group row">
            <label class="control-label col-md-2"> User Email </lable>
                <div class="col-md-10">
                <input type="email" name="email" value="" class="form-control"/>
                   

     </div>
    </div>
    <div class="form-group row">
            <label class="control-label col-md-2"> User Password </lable>
                <div class="col-md-10">
                <input type="password" name="password" value="" class="form-control"/>
                
         </div>
    </div>
    <div class="form-group row">
            <label class="control-label col-md-2"> User Password </lable>
                <div class="col-md-10">
                <select class="from-control" name="access_label" required >
                    <option value="" disabled selected>--Select Access Label</option>
                    <option value="1">Super Admin</option>
                    <option value="2">Admin</option>
                    <option value="3">Executive</option>
                </select>
         </div>
    </div>
    <div class="form-group row">
            <label class="control-label col-md-2"> </lable>
                <div class="col-md-10">
                    <input type="submit" name="btn" class="btn btn-success" value="Create New User"/>
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