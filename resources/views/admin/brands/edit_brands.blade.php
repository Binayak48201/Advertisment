@extends('admin.layouts.master')

	@section('content')
		 <main class="pt-5 mx-lg-5">

    		<div class="container-fluid mt-5">

    		    		<form class="text-center border border-light p-5" method="POST" action="{{action('BrandController@update', $brand->id)}}" enctype="multipart/form-data">

					@csrf

				    <p class="h4 mb-4">Edit Brand</p>
				    <small class="text-info" style="color: rgb(176, 190, 197);">
			    		All fields marked with an * are mandatory fields.
			    	</small>
			    	<div class="form-group">
						<label class="float-left text-primary active">Name Of Brand*</label>
					    <input type="text"  id="defaultContactFormName" class="form-control mb-4 {{$errors->has('brand_name') ? 'border-dark' : ''}}" name="brand_name" placeholder="Name" value="{{$brand->brand_name}}"required>
					</div>		


				    <div class="form-group">
				        <textarea class="form-control rounded-0 {{$errors->has('body') ? 'border-danger' : ''}}" name="body" id="editor" rows="3">{{$brand->body}}</textarea>
				    </div>		

				    <input type="file" name="brand_img" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Add_image">		   

				    <!-- Send button -->
				    <button class="btn btn-info btn-block" type="submit">Submit</button>
					
					@include('extra.error')
				</form>

    		</div>

    	</main>

	@endsection
