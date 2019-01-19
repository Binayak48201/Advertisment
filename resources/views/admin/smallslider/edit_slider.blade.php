@extends('admin.layouts.master')

@section('content')
	
    <main class="pt-5 mx-lg-5">

    	<div class="container-fluid mt-5">
    		<!-- Default form contact -->
			<form class="text-center border border-light p-5" method="POST" action="{{action('SmallsliderController@update', $smallslider->id)}}" enctype="multipart/form-data">

				{{method_field('PATCH')}}
				@csrf

			    <p class="h4 mb-4">Edit the Slider<br>

			    	<small style="color: #b0bec5;">
			    		All fields marked with an * are mandatory fields.
			    	</small><br><br>

			    </p>
				
				<div class="row">
					<div class="col">
			    <!-- FOR TITLE -->
			    		<div class="form-group">
			    			<label class="float-left">Title*</label>
			    			<input class="form-control rounded-0" type="text" name="title" value="{{$smallslider->title}}" placeholder="Title of the slider">
			     		</div>
					</div> <!--- END OF FIRST COL-->

					<div class="col">
						<label class="float-left" for="price">OffPrice*</label>
						<input class="form-control mb-4" type="number" id="price" name="offprice" value="{{$smallslider->offprice}}" placeholder="Enter the Price">
					</div><!--- END OF FIRST COL-->

				</div><!--- END OF ROW-->
				
				<div class="row">
					<div class="col">
						<label class="float-left" for="norm_numbers">Choose an Image*</label>
				    	<input type="file" name="slider_img" id="defaultContactFormEmail" class="form-control mb-4">
					</div>
					<div class="col">
						<label class="float-left" for="date">Count Down</label>
						<input type="date" id="date" name="count_down" class="form-control mb-4" value="{{$smallslider->count_down}}" placeholder="Enter the count down date.">
					</div>
				</div>

				<div class="form-group">
					<label class="float-left" for="longtext">Product Body*</label>
					<textarea class="form-control mb-4" name="body" id="longtext" cols="3" rows="3">
						{{$smallslider->body}}
					</textarea>
				</div>

				<div class="form-group">
		    		<textarea class="form-control rounded-0"  name="visit" id="editor" rows="3" placeholder="Title of Page">
		    			{!!$smallslider->visit!!}
		    		</textarea> 
		    	</div>
				

			    <!-- Send button -->
			    <button type="submit" 
			    	class="btn blue-gradient btn-block btn-rounded z-depth-1a waves-effect waves-light newstylebutton">
			    		Upload
			    </button>

				@include('extra.error');

			</form>
<!-- Default form contact -->
        </div>

  	</main>  	
@endsection