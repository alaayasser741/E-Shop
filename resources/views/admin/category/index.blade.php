@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="-mb-2">Category Page</h4>
        <hr>
    </div>
    <div class="card-body container-fluid py-0 px-4">
        <table class="table table-bordered ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Descriptipn</th>
                    <th scope="col">Status</th>
                    <th scope="col">Popular</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item )
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->popular }}</td>
                    <td>
                        <img src="{{ asset('assets/uploads/category/'. $item->image) }}" alt="Image here" class="cate-image">
                    </td>
                    <td>
                       <a href="{{ url('edit-product/'.$item->id) }}" class="btn  btn-info">Edit</a>
                       <a href="{{ url('delete-product/'.$item->id) }}" class="btn  btn-danger">Delete</a>
                        
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection