@extends('frontend.layout')

@section('content')

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <h1>Register New User</h1>
        <form>
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="noic" class="col-sm-2 col-form-label">No. MyKAD</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="noic" id="noic" placeholder="IC No. without dash (-)">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </div>
</form>
      </div>
    </section>

@endsection