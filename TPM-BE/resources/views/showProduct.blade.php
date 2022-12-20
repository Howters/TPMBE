@extends('template')

@section('title', 'show product')

@section('body')

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$product->NamaMakanan}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$product->AsalMakanan}}</h6>
      <p class="card-text">{{$product->TanggalExpired}}</p>
      <p class="card-text">{{$product->Kuantitas}}</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>

@endsection
