@extends('welcome')

@section('content')



    <div class="container mt-4 mb-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($data as $item)

                <div class="col">
                    <div class="card">
                        <form action="/section" method="get">
                            {{-- @csrf --}}
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
    </div>


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
