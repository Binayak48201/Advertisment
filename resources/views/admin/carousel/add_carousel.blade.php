@extends('admin.layouts.master')

@section('content')
	
    <main class="pt-5 mx-lg-5">

    	<div class="container-fluid mt-5">
    		<!-- Default form contact -->
			<form class="text-center border border-light p-5" method="POST" action="/admin/add_carousel" enctype="multipart/form-data">

				@csrf

			    <p class="h4 mb-4">Add New Carousel</p>

			    <input type="text"  id="defaultContactFormName" class="form-control mb-4 {{$errors->has('title') ? 'border-danger' : ''}}" name="title" placeholder="Name" required>

			    <div class="form-group">
			        <textarea class="form-control rounded-0 {{$errors->has('body') ? 'border-danger' : ''}}" name="body" id="editor" rows="3" placeholder="Message"></textarea>
			    </div>		

			    <input type="file" name="slider_img" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Add_image">		   

			    <!-- Send button -->
			    <button class="btn btn-info btn-block" type="submit">Submit</button>
				
				@include('extra.error')
			</form>

			
<!-- Default form contact -->
        </div>

  	</main>  	
@endsection