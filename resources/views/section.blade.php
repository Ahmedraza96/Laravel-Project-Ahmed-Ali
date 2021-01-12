@extends('welcome')

@section('content')

    {{-- Main --}}

    <div class="card mb-8"  p-5 style="max-width: 900px">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{$image}}" alt="..." class='' width="250px">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">{{$Product}}</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                    <p class="card-text">Rs. {{$Price}}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- booking form --}}

    <div class="col-4 p-4">
        <form class="row g-3" method='get' action="/booking">
            <input type="hidden" name="Product" value="{{$Product}}">
            <input type="hidden" name="Price" value="{{$Price}}">
            <input type="hidden" name="image" value="{{$image}}">
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputEmail4" name="Name" placeholder="Enter Name">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="Address">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Contact No.</label>
                <input type="number" class="form-control" id="inputAddress2" placeholder="0300-xxxxxx" name="Contact">
            </div>
            <div class="col-md-12">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity" name="City" placeholder="e.g Pakistan">
            </div>
            <div class="col-md-6">
                <label for="inputZip" class="form-label">Date</label>
                <input type="date" class="form-control" id="inputZip" name="Date">
            </div>
            <div class="col-md-3">
                <label for="inputZip1" class="form-label">Days</label>
                <input type="number" class="form-control" id="inputZip1" name="Days">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Book</button>
            </div>
        </form>
    </div>




@endsection
