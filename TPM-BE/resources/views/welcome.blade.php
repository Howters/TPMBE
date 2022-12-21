@extends('template')

@section('title', 'welcome')

@section('body')

<div class="d-flex m-5">
    @foreach ($products as $product)
    <div class="card" style="width: 18rem;">
        <img src="{{asset('/storage/Product/'.$product->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$product->NamaMakanan}}</h5>
            <p class="card-text">{{$product->AsalMakanan}}</p>
            <p class="card-text">{{$product->TanggalExpired}}</p>
            <p class="card-text">{{$product->Kuantitas}}</p>
            <a href="{{route('show', $product->id)}}" class="btn btn-primary">Go somewhere</a>
            <a href="{{route ('edit', $product->id)}}" class="btn btn-success">Edit</a>
            <form action="/delete-product/{{$product->id}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger">delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>

@endsection
