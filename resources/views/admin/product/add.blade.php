@extends('layouts.admin')

@section('content')
<div class="card  mt-3 col-xl-12 col-sm-6">
<div class="card-header ">
    <h4 class="-mb-2">Add Product</h4>
</div>
    <div class="card-body container-fluid py-0 px-4 ">
        <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row ">
                <div class="col-md-12 mb-3 ">
                    <select class="form-select" name="category_id">
                        <option value="select">Select a category</option>
                        @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                        
                      </select>
                </div>
                <div class="col-md-6 mb-3 ">
                    <label for="name">Name</label>
                    <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="name">
                </div>
                <div class="col-md-6  mb-3">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="slug">
                </div>
                <div class="col-md-12  mb-3">
                    <label for="small_description">Small Description </label>
                    <textarea  class="form-control border border-gray-200 rounded p-2 w-full" name="small_description" rows="3"></textarea>
                </div>
                <div class="col-md-12  mb-3">
                    <label for="description"> Description </label>
                    <textarea  class="form-control border border-gray-200 rounded p-2 w-full" name="description" rows="3"></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="original_price">Original Price</label>
                    <input type="number" class="form-control border border-gray-200 rounded p-2 w-full" name="original_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="selling_price">Selling Price</label>
                    <input type="number" class="form-control border border-gray-200 rounded p-2 w-full" name="selling_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tac">Tax</label>
                    <input type="number" class="form-control border border-gray-200 rounded p-2 w-full" name="tax">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="qty">Quantity</label>
                    <input type="number" class="form-control border border-gray-200 rounded p-2 w-full" name="qty">
                </div>
                <div class="col-md-6  mb-3">
                    <label for="status">Status</label>
                    <input type="checkbox" name="status">
                </div>
                <div class="col-md-6  mb-3">
                    <label for="trending">Trending</label>
                    <input type="checkbox" name="trending">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="meta_title">Meta_Title</label>
                    <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="meta_title">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="meta_keywords">Meta_Keywords</label>
                    <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="meta_keywords">
                </div>
                <div class="col-md-12  mb-3">
                    <label for="meta_description">Meta_Description</label>
                    <textarea  class="form-control border border-gray-200 rounded p-2 w-full" name="meta_description" rows="3"></textarea>
                </div>
                <div class="col-md-12  mb-3">
                    <label for="image">Upload Image</label>
                    <input type="file"  class="form-control border border-gray-200 rounded p-2 w-full" name="image">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<br>

    
@endsection
