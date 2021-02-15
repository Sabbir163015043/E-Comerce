@extends('admin.master')


@section('body')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Category</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Add Category</a>
                    </div>  


<div class="row">
    <div class="col-md-12">
        <div class="card card-body rounded-0">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>SL NO</th>
                    <th>Brand Name</th>
                    <th>Brand Description</th>
                    <th>Publication Status</th>
                    <th>Action</th>
                </tr>
               @foreach($brands as $key => $brand )
               <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $brand->name }}</td>
                    <td>{{ $brand->description }}</td>
                    <td>{{ $brand->status == 1 ? 'Published' : 'UnPublished' }}</td>
                    <td>
                        <a href="{{ route('edit-brand',['id' => $brand->id ]) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('delete-brand',['id' => $brand->id ]) }}" class="btn btn-danger" onclick=" return confirm('Are your Sure this file delete')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
            <div>
            </div>
        </div>
    </div>

</div>

@endsection