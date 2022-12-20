@extends('template')

@section('title', 'Create Product')

@section('body')

<div class="m-5">
    <h1 class="text-center">Create Product</h1>
    <form action="/store-product" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Makanan</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NamaMakanan">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Asal Makanan</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="AsalMakanan">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal Expired</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="TanggalExpired">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kuantitas</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="Kuantitas">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection
