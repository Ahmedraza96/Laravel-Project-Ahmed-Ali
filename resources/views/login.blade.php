@extends('welcome')

@section('content')
<div class="row justify-content-center">

    <form  action="/loginuser" method="get" class="col-4 my-4">
        {{-- @csrf --}}
        <div class="row justify-content-center">
          <h2>Login</h2>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>

      </form>


@endsection
