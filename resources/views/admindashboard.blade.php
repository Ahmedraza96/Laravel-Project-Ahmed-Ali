@extends('welcome')

@section('content')

<h1 class="text-center p-3">Admin View</h1>

    <h2 class="text-center mb-3 text-danger">Add Hotel</h2>
    <form action="/insert" method="post" class="p-5 col-5 mx-auto" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" placeholder='Product Name' name='product'>
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" placeholder='Product Price' name='price'>
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" placeholder='Product Qty' name='qty'>
        </div>
        <div class="mb-3">
            <input type="file" class="form-control" placeholder='Product Qty' name='image'>
        </div>
        <input type="submit" value="Add" name='submit' class="btn btn-success">

    </form>

    <h1 class="text-center p-3">Order Details</h1>

    <div class="table p-5">
        <table class="table table-success table-striped">
            <thead>
                <th>Product</th>
                <th>Image</th>
                <th>Price</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>City</th>
                <th>Date</th>
                <th>Days</th>
            </thead>

            <tbody>

                @foreach ($record as $item)
                    <tr>
                        <form action="/" method="get">
                            <td><input type="hidden" name="Product" value="{{ $item['Product'] }}">{{ $item['Product'] }}</td>
                            <td><input type="hidden" name="image" value="{{ $item['image'] }}"><img src="{{ $item['image'] }}" alt="" srcset="" height="200px"></td>
                            <td><input type="hidden" name="Price" value="{{ $item['Price'] }}">{{ $item['Price'] }}</td>
                            <td><input type="hidden" name="Name" value="{{ $item['Name'] }}">{{ $item['Name'] }}</td>
                            <td><input type="hidden" name="Address" value="{{ $item['Address'] }}">{{ $item['Address'] }}</td>
                            <td><input type="hidden" name="Contact" value="{{ $item['Contact'] }}">{{ $item['Contact'] }}</td>
                            <td><input type="hidden" name="City" value="{{ $item['City'] }}">{{ $item['City'] }}</td>
                            <td><input type="hidden" name="Date" value="{{ $item['Date'] }}">{{ $item['Date'] }}</td>
                            <td><input type="hidden" name="Days" value="{{ $item['Days'] }}">{{ $item['Days'] }}</td>
                            <td><input type="submit" name="update" value="update" class="btn btn-warning"></td>
                            <td><input type="submit" name="delete" value="delete" class="btn btn-danger"></td>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    {{-- <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($data as $item)

                <div class="col">
                    <div class="card">
                        <form action="/section" method="get">
                            @csrf
                            <input type="hidden" name="image" value="images/{{ $item['image'] }}"><img src="images/{{ $item['image'] }}" class="card-img-top" alt="..." height="400px">
                            <div class="card-body">
                                <h5 class="card-title"><input type="hidden" name="Product" value="{{ $item['Product'] }}">{{ $item['Product'] }}</h5>
                                <p class="card-text"><input type="hidden" name="Price" value="{{ $item['Price'] }}" >Rs. {{ $item['Price'] }}</p>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
                                <input type="submit" value="Book-Now" name="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
        </div>

        @endforeach
    </div>
    </div> --}}


    {{-- <div class="table p-5">
        <table class="table table-success table-striped">
            <thead>
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </thead>

            <tbody>

                @foreach ($data as $item)
                    <tr>
                        <form action="/editform" method="get">
                            <td><input type="hidden" name="ID" value="{{ $item['ID'] }}">{{ $item['ID'] }}</td>
                            <td><input type="hidden" name="product" value="{{ $item['Product'] }}">{{ $item['Product'] }}
                            </td>
                            <td><input type="hidden" name="price" value="{{ $item['Price'] }}">{{ $item['Price'] }}</td>
                            <td><input type="hidden" name="qty" value="{{ $item['Quantity'] }}">{{ $item['Quantity'] }}</td>
                            <td><img src="images/{{ $item['image'] }}" width='200px' alt="" srcset=""></td>
                            <td><input type="submit" name="update" value="update" class="btn btn-warning"></td>
                            <td><input type="submit" name="delete" value="delete" class="btn btn-danger"></td>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}


@endsection
