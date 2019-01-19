@extends('admin.layouts.master')

@section('content')

	<main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">       

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">
                        	<a href="/admin/add_carousel">
								<button type="button" class="btn btn-success">+ Add Carousel</button><br><br>
                        	</a>
                        		
                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue lighten-4">
                                    <tr>
                                        <th>S.N</th>
                                        <th>Name</th>
                                        <th>Body</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
 								@foreach($carousels as $key => $carousel)
	                                <tbody>
	                                    <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$carousel->title}}</td>
                                            <td>{!!$carousel->body!!}</td>
                                            <td class="zoom"><img src="/storage/slider_images/{{$carousel->slider_img}}" style="width: 60px;"></td>
                                            <td style="display: flex;">
                                                <a href="{{action('CarouselController@edit', $carousel->id)}}">
                                                    <button type="button" class="btn btn-outline-success btn-rounded waves-effect" >Edit</button>
                                                </a>
                                                 <form action="/admin/delete_carousel/{{$carousel->id}}" method="POST"
                                                    onSubmit="return confirm('Are u sure you want to delete this.')">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" class="btn btn-outline-danger btn-rounded waves-effect">Delete</button>
                                                </form>
                                            </td>
                                        </tr>   
	                               </tbody>
                                @endforeach
                            </table>
                            <!-- Table  -->
                            <div class="float-right">
                                {{$carousels->links()}}
                            </div>
                        </div>

                    </div>
                    <!--/.Card-->

                </div>

    </main>

@endsection
                                                    