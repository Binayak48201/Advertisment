@extends('admin.layouts.master')

@section('content')
	
    <main class="pt-5 mx-lg-5">

    	<div class="container-fluid mt-5">
    		<!-- Default form contact -->
			<form class="text-center border border-light p-5" method="POST" action="/admin/add_category" enctype="multipart/form-data">

				@csrf

			    <p class="h4 mb-4">Add New Category</p>

			    <input type="text" name="name" id="defaultContactFormName" class="form-control mb-4" placeholder="Name" >

			    <input type="text" name="slug" id="defaultContactFormName" class="form-control mb-4" placeholder="Slug" >				   

			    <!-- Send button -->
			    <button class="btn btn-info btn-block" type="submit">Submit</button>
				@include('extra.error')
			</form>
        </div>

  	</main>  	
@endsection