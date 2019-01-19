@extends('admin.layouts.master')

@section('content')	
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
	{{-- <h1>Register</h1>
<form method="POST" action="/admin/register">
	@csrf

	<input type="text" name="name">	
	<input type="text" name="email">
	<input type="password" name="password">
	<input type="password" name="password_confirmation">
	<button type="submit">Submit</button>
	@if(count($errors))
	<ul>
		@foreach($errors->all as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
	@endif
</form> --}}
<!-- Material form login -->
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Register a new admin</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form  method="POST" action="/admin/register" class="text-center" style="color: #757575;">
    	@csrf
      <!-- Email -->
      <div class="md-form">
        <input type="text" name="name" id="materialLoginFormEmail" class="form-control">
        <label for="materialLoginFormEmail">Name</label>
      </div>

       <div class="md-form">
        <input type="email" name="email" id="materialLoginFormEmail" class="form-control">
        <label for="materialLoginFormEmail">E-mail</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" name="password" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Password</label>
      </div>

       <div class="md-form">
        <input type="password" name="password_confirmation" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Confirm Password</label>
      </div>
      <!-- Sign in button -->
      
       <button type="submit" style="background: linear-gradient(40deg,#45cafc,#303f9f)!important;" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Create</button>
       @include('extra.error')
    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
</div>
</main>
@endsection