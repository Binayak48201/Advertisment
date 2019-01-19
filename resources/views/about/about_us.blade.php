@extends('layouts.main_body')

    @section('content') 
    	<div class="container">
    		<h1 class="text-center">About Us</h1>
    		<div class="row">
    			<div class="col-md-6">
    				<h3 class="text-center">Our Mission</h3>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque maiores, consequatur eveniet inventore laudantium voluptatibus temporibus recusandae debitis magnam amet aliquid harum similique quibusdam distinctio repellat alias maxime suscipit. Quod.</p>
    			</div>
    			<div class="col-md-6">
    				<h3 class="text-center">Our Vision</h3>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis aperiam porro enim facilis libero aspernatur ea dolor officia laudantium perferendis, optio, adipisci excepturi explicabo quibusdam culpa? Quod enim, quam consequuntur.</p>
    			</div>
    		</div>{{--END OF ROW--}}
    		<img src="{{asset('images/about.svg')}}" class="rounded mx-auto d-block img-fluid" alt="Responsive image" style="height:500px;">
    	</div>
    @endsection