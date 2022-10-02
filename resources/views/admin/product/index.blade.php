@extends('layouts.admin')
@section('content')
<div class="card ">
    <div class="card-header">
        <h4 class="-mb-2">Products Page</h4>
        <hr>
    </div>
    <div class="card-body container-fluid py-0 px-4 ">
        <table class="table table-bordered ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Name</th>
                    <th scope="col">Selling Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $item )
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category->name}}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->selling_price }}</td>
                    <td>
                        <img src="{{ asset('assets/uploads/product/'. $item->image) }}" alt="Image here" class="cate-image">
                    </td>
                    <td>
                       <a href="{{ url('edit-product/'.$item->id) }}" class="btn  btn-info btn-sm">Edit</a>
                       <a href="{{ url('delete-product/'.$item->id) }}" class="btn  btn-danger btn-sm">Delete</a>
                        
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection