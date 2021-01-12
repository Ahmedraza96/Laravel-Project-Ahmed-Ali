@extends('welcome')

@section('content')


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



@endsection
