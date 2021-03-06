@extends('layout.main')

@section('container')
<div class="container">
	<h1>Tambah Produk</h1>
    <form method="post" action="/product">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}">
            @error('name')<div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" value="{{old('description')}}">
            @error('description')<div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" value="{{old('price')}}">
            @error('price')<div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label>Picture</label>
            <input type="file" name="picture" class="form-control-file @error('picture') is-invalid @enderror" id="picture">
            @error('picture')<div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection