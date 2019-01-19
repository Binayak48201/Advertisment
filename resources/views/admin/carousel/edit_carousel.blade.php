@extends('admin.layouts.master')

	@section('content')
		 <main class="pt-5 mx-lg-5">

    		<div class="container-fluid mt-5">

    			<form class="text-center border border-light p-5" method="POST" action="{{action('CarouselController@update', $carousel->id)}}" enctype="multipart/form-data">
					{{method_field('PATCH')}}
					@csrf

				    <p class="h4 mb-4">Edit the Carousel</p>

				    <!-- Name -->
				    <input type="text" name="title" id="defaultContactFormName" class="form-control mb-4" placeholder="Name" value="{{$carousel->title}}">		   			

				    <!-- Image -->
				    <input type="file" name="slider_img" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Add_image">

					<div class="form-group">
				    	<textarea class="form-control rounded-0" name="body" id="editor" rows="3">
				    		{{$carousel->body}}
				    	</textarea>
					</div>
				    <!-- Send button -->
				    <button class="btn btn-info btn-block mt-4" type="submit">Update</button>

				</form>	

    		</div>

    	</main>

	@endsection
	