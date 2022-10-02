@extends('layouts.admin')

@section('content')
<div class="card  mt-3 col-xl-12 col-sm-6">
<div class="card-header ">
    <h4 class="-mb-2">Edit Product</h4>
</div>
    <div class="card-body container-fluid py-0 px-4 ">
        <form action="{{ url('update-product/' .$product->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row ">
                <div class="col-md-12 mb-3 ">
                    <select class="form-select">
                        <option value="select">{{ $product->category->name }}</option>
                      </select>
                </div>
                <div class="col-md-6 mb-3 ">
                    <label for="name">Name</label>
                    <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="name" value="{{ $product->name }}">
                </div>
                <div class="col-md-6  mb-3">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="slug" value="{{ $product->slug }}">
                </div>
                <div class="col-md-12  mb-3">
                    <label for="small_description">Small Description </label>
                    <textarea  class="form-control border border-gray-200 rounded p-2 w-full" name="small_description" rows="3" >{{ $product->small_description}}</textarea>
                </div>
                <div class="col-md-12  mb-3">
                    <label for="description"> Description </label>
                    <textarea  class="form-control border border-gray-200 rounded p-2 w-full" name="description" rows="3" >{{ $product->description}}</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="original_price">Original Price</label>
                    <input type="number" class="form-control border border-gray-200 rounded p-2 w-full" name="original_price" value="{{ $product->original_price}}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="selling_price">Selling Price</label>
                    <input type="number" class="form-control border border-gray-200 rounded p-2 w-full" name="selling_price" value="{{ $product->selling_price}}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tac">Tax</label>
                    <input type="number" class="form-control border border-gray-200 rounded p-2 w-full" name="tax" value="{{ $product->tax}}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="qty">Quantity</label>
                    <input type="number" class="form-control border border-gray-200 rounded p-2 w-full" name="qty" value="{{ $product->qty}}">
                </div>
                <div class="col-md-6  mb-3">
                    <label for="status">Status</label>
                    <input type="checkbox" name="status" {{ $product->status == "1" ? 'checked' : ''}}>
                </div>
                <div class="col-md-6  mb-3">
                    <label for="trending">Trending</label>
                    <input type="checkbox" name="trending" {{ $product->trending == "1" ? 'checked' : ''}}>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="meta_title">Meta_Title</label>
                    <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="meta_title" value="{{ $product->meta_title}}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="meta_keywords">Meta_Keywords</label>
                    <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="meta_keywords" value="{{ $product->meta_keyword}}">
                </div>
                <div class="col-md-12  mb-3">
                    <label for="meta_description">Meta_Description</label>
                    <textarea  class="form-control border border-gray-200 rounded p-2 w-full" name="meta_description" rows="3" >{{ $product->meta_description}}</textarea>
                </div>
                <div class="col-md-12  mb-3">
                    <label for="image">Upload Image</label>
                    <input type="file"  class="form-control border border-gray-200 rounded p-2 w-full" name="image" value="{{ $product->image}}">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
<br>

    
@endsection
