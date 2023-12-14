
@extends('layout.master')

@section('content')
<!-- Login 2 - Bootstrap Brain Component -->
<div class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
        
      <div class="col-8 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h4>Create new account</h4>
              </div>
            </div>
          </div>
          <form action="{{route('register')}}" method="POST">
            @csrf
           
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="email" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required>
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
              </div>
              <div class="col-12">
                <label for="password" class="form-label">Password </label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" value="" required>
              </div>
              <div class="col-12">
                
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn bsb-btn-xl btn-primary" type="submit">Sign in</button>
                </div>
              </div>
          
            </div>
          </form>
      
    @endsection