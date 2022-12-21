@extends ('template')

@section('title','edit product')

@section ('body')

<form action="/update-product/{{$product->id}}" method = "POST" >
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Makanan</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="NamaMakanan"
      value = "{{$product->NamaMakanan}}">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Asal Makanan</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name = "AsalMakanan" value = "{{$product->AsalMakanan}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tanggal Expired</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name = "TanggalExpired" value = "{{$product->TanggalExpired}}">
      </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Kuantitas</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name = "Kuantitas" value = "{{$product->Kuantitas}}">
      </div>
   
 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  