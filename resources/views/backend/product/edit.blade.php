@extends('layouts.backend')

@section('main')
    <div class="row">
        <h3 class="text-center mt-3">Edit Product</h3>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{route('admin.product.edit',$product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">product Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter Product name" value="{{$product->name}}">
                    @error('name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product Price</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror"  id="price" name="price" placeholder="Enter Product Price"value="{{$product->price}}">
                    @error('price')
                    <p class="text-danger">{{$message}}</p>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Product Description</label>
                    <textarea name="desc" id="desc" class="form-control @error('desc') is-invalid @enderror" placeholder="Enter Product Description" rows="10">{{$product->desc}}</textarea>
                    @error('desc')
                    <p class="text-danger">{{$message}}</p>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Product Photo</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
                    <img src="{{asset('uploads/product/'.$product->photo)}}" alt="product image" width="100px">
                    @error('photo')
                    <p class="text-danger">{{$message}}</p>
                    @enderror

                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>


        </div>
    </div>


@endsection
