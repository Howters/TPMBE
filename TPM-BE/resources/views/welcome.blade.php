@extends('template')

@section('title', 'welcome')

@section('body')

<div class="d-flex m-5">
    @foreach ($products as $product)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$product->NamaMakanan}}</h5>
            <p class="card-text">{{$product->AsalMakanan}}</p>
            <p class="card-text">{{$product->TanggalExpired}}</p>
            <p class="card-text">{{$product->Kuantitas}}</p>
            <a href="{{route('show', $product->id)}}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach
</div>

@endsection
