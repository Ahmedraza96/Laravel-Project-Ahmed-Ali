@extends('welcome')

@section('content')

<h1>Update Data</h1>

    <form action="/update" method="get" class="p-5 col-5 mx-auto">
        <div class="mb-3">
            <input type="hidden" class="form-control" placeholder='Product Name' name='ID' value="{{$ID}}">
            <input type="text" class="form-control" placeholder='Product Name' name='product' value="{{$product}}">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" placeholder='Product Price' name='price' value="{{$price}}">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" placeholder='Product Qty' name='qty' value="{{$qty}}">
        </div>
        <input type="submit" value="update" name='update' class="btn btn-primary">
    </form>




@endsection
