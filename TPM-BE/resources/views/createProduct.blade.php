@extends('template')

@section('title', 'Create Product')

@section('body')

<div class="m-5">
    <h1 class="text-center">Create Product</h1>
    <form action="/store-product" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Makanan</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NamaMakanan" value= "{{old('NamaMakanan')}}">
          @error('NamaMakanan')is-invalid
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Asal Makanan</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="AsalMakanan" value= "{{old('AsalMakanan')}}">
          @error('AsalMakanan')is-invalid
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal Expired</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="TanggalExpired" value= "{{old('TanggalExpired')}}">
            @error('TanggalExpired')is-invalid
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kuantitas</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="Kuantitas" value= "{{old('Kuantitas')}}">
            @error('Kuantitas')is-invalid
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Image</label>
          <input type="file" class="form-control" id="exampleInputPassword1" name="Image" value= "{{old('Image')}}">
          @error('Image')is-invalid
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Category</label>
        <select class="form-select" aria-label="Default select example" name="category">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->nama}}</option>
            @endforeach
          </select>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection
