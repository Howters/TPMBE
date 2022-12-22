@extends ('template')

@section ('title','create category')
@section('body')
<form action="/store-category" method ="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Category</label>
        <input type="text" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" name="name" value="{{old('name')}}">
        {{-- @error('AsalMakanan')is-invalid
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection