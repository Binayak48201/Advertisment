@extends('admin.layouts.master')

@section('content')
	
    <main class="pt-5 mx-lg-5">

    	<div class="container-fluid mt-5">
    		<!-- Default form contact -->
			<form class="text-center border border-light p-5" method="POST" action="/admin/add" enctype="multipart/form-data">

				@csrf

			    <p class="h4 mb-4">Add New Advertisment<br>

			    	<small style="color: #b0bec5;" class="text-info">
			    		All fields marked with an * are mandatory fields.
			    	</small><br><br>

			    </p>
				
			    <!-- FOR TITLE -->
			    <div class="row">
			    	<div class="col">
			    		<div class="form-group">
			    			<label class="float-left text-primary">TITLE*</label>
			    			<input type="text" name="title" class="form-control mb-4" value="{{old('title')}}" placeholder="Title of page">
			     		</div>
			    	</div>
			    	<div class="col">
			    		<label class="float-left text-primary" for="exampleInputEmail1">SELECT THE BRAND*</label>
						    <!-- Subject -->
						    <select  name="brand_id" id="exampleInputEmail1" class="browser-default custom-select mb-4">
						        <option value="">Choose Brand</option>
						        @foreach (App\Brand::all() as $brand)
		                 		    <option value="{{ $brand->id }}" 
		                 		    	{{ old('brand_id') == $brand->id ? 'selected' : '' }}>
		                     				{{ $brand->brand_name }}
		                   			</option>                                  
					            @endforeach
						    </select>
			    	</div>
			    </div>
			    
				<div class="row">
					<div class="col">
						<label class="float-left text-primary" for="exampleInputEmail1">SELECT THE CATEGORY*</label>
						    <!-- Subject -->
						    <select  name="channel_id" id="exampleInputEmail1" class="browser-default custom-select mb-4">
						        <option value="">Choose Category</option>
						        @foreach (App\Channel::all() as $channel)
		                 		    <option value="{{ $channel->id }}" 
		                 		    	{{ old('channel_id') == $channel->id ? 'selected' : '' }}>
		                     				{{ $channel->name }}
		                   			</option>                                  
					            @endforeach
						    </select>
					</div> <!--- END OF FIRST COL-->

					<div class="col">
						<label class="float-left text-primary" for="place">PLACE*</label>
						<input class="form-control mb-4" type="text" id="place" name="place"  value="{{old('place')}}" placeholder="Enter the place">
					</div><!--- END OF FIRST COL-->

				</div><!--- END OF ROW-->
				
				<div class="row">
					<div class="col">
						<label class="float-left text-primary" for="discountrate">DISCOUNT (%)</label>
						<input type="number" id="discountrate" name="discount"  value="{{old('discount')}}" class="entry form-control mb-4" placeholder="Enter the Discount amount if available. in %">
					</div>
					<div class="col">
						<label class="float-left" for="stri_ numbers">Strike Number Eg &nbsp;<s>200</s></label>
						<input type="number" id="stri_numbers" name="str_price" value="{{old('str_price')}}" class="entry form-control mb-4" placeholder="Enter the strike number if available.">
					</div>
				</div>

				<div class="row">
					<div class="col">
						<label class="float-left text-primary" for="norm_numbers">AVAILABLE PRICE</label>
						<input type="number" step="0.01" id="norm_numbers" name="price"  value="{{old('price')}}" class="form-control mb-4" placeholder="Enter the Price">
					</div>
					<div class="col">
						<label class="float-left text-primary" for="date">COUNT DOWN</label>
						<input type="date" id="date" name="count_down"  value="{{old('count_down')}}" class="form-control mb-4" placeholder="Enter the count down date.">
					</div>
				</div>

			    <div class="row">
					<div class="col">
						{{-- DESCRIPTION --}}
						<div class="form-group">
							<label class="float-left text-primary" for="body">DESCRIPTION*</label>
					        <textarea class="form-control rounded-0" name="body" id="body"  placeholder="Some description about the product.">
					        	{{old('body')}}
					        </textarea>
			    		</div>
					</div>

				    <!-- Image -->
				    <div class="col">
				    	<label class="float-left text-primary" for="norm_numbers">CHOOSE AN IMAGE*</label>
				    	<input type="file" name="adv_img"  id="defaultContactFormEmail" class="form-control mb-4" placeholder="Add_image">
					</div>
				</div>
				<div class="form-group">
			    		<label class="text-primary">URL OF ANOTHER PAGE <small class="text-danger">DO NOT CHANGE THE BELOW TEXT*</small></label>
			    	<textarea class="form-control rounded-0" name="direct" id="editor" rows="3" placeholder="Title of Page">
			    	Visit the Page</textarea> 
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