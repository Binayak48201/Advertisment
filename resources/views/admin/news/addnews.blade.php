@extends('admin.layouts.master')

@section('content')
	
    <main class="pt-5 mx-lg-5">

    	<div class="container-fluid mt-5">
    		<!-- Default form contact -->
			<form class="text-center border border-light p-5" method="POST" action="/admin/add-news" enctype="multipart/form-data">

				@csrf

			    <p class="h4 mb-4">Add New News<br>

			    	<small style="color: #b0bec5;">
			    		All fields marked with an * are mandatory fields.
			    	</small><br><br>

			    </p>

				<div class="row">
					<div class="col">
						<label class="float-left" for="place">Title*</label>
						<input class="form-control mb-4" type="text" id="place" name="title" placeholder="Enter the Title">
		   
					</div> <!--- END OF FIRST COL-->

					<div class="col">
						<label class="float-left" for="place">Minimum*</label>
						<input class="form-control mb-4" type="number" id="place" name="minimum" placeholder="Enter the minimum minute to read the news">
					</div><!--- END OF FIRST COL-->

				</div>

			    <div class="row">
					<div class="col">
						{{-- DESCRIPTION --}}
						<div class="form-group">
							<label class="float-left" for="author">Author*</label>
					        <input type="text" class="form-control rounded-0" name="aurthors" id="author"  placeholder="Creator Name">
			    		</div>
					</div>

				    <!-- Image -->
				    <div class="col">
				    	<label class="float-left" for="norm_numbers">Choose an Image*</label>
				    	<input type="file" name="news_img" id="norm_numbers" class="form-control mb-4" placeholder="Add_image">
					</div>
				</div>

				<div class="form-group">
			    	<label>Description*</label>
			    	<textarea class="form-control rounded-0" name="body" id="editor" rows="3">Some long text here.</textarea> 
			     </div>
			    <!-- Send button -->
			    <button type="submit" 
			    	class="btn blue-gradient btn-block btn-rounded z-depth-1a waves-effect waves-light newstylebutton">
			    		Upload
			    </button>

				@include('extra.error')

			</form>
<!-- Default form contact -->
        </div>

  	</main>  	
@endsection
