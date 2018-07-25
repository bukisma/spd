@extends('frontend.layout')

@section('content')
<div style="padding:20px; "></div>
    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <h1>Register New User</h1>

@include('common.alert')
@include('common.form_error')

        <form method="post" action="{{ route('user.register.post') }}">
          @csrf
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="ic" class="col-sm-2 col-form-label">No. MyKAD</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ic" id="ic" placeholder="IC No. without dash (-)" value="{{ old('ic') }}">
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