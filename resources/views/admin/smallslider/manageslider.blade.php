@extends('admin.layouts.master')

@section('content')

	<main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
        

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">
                        	<a href="/admin/add_slider">
								<button type="button" class="btn btn-success">+ Add Small Slider</button><br><br>
                        	</a>
                        		
                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue lighten-4">
                                    <tr>
                                        <th>S.N</th>
                                        <th>Title</th>
                                        <th>Offprice</th>
                                        <th>Visit</th>
                                        <th>Count Down</th>
                                        <th>Slider Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
 								@foreach($sliders as $key=>$slide)
                                    
	                                <tbody>
	                                    <tr>
	                                        <th scope="row">
                                                {{++$key}}
                                            </th>

	                                        <td>
                                                <p>{{$slide->title}}</p>
                                            </td>

                                            <td>
                                                <p>{{$slide->offprice}}</p>
                                            </td>

                                            <td>
                                                <p>{!!$slide->visit!!}</p>
                                            </td>

                                            <td>
                                                <p>{{$slide->count_down}}</p>
                                            </td>

                                               <td><img src="/storage/smallslider_images/{{$slide->slider_img}}" style="width: 60px;"></td>
	                                     
	                                        <td style="display: flex;">
                                                <a href="{{action('SmallsliderController@edit', $slide->id)}}">
                                                    <button type="button" title="Edit" style="background: #00e676;">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a> &nbsp;
	                                        	 <form action="/admin/delete_slider/{{$slide->id}}" method="POST"
	                      							onSubmit="return confirm('Are u sure you want to delete this.')">
	                      							@csrf
	                      							{{method_field('DELETE')}}
                                                    <button type="submit" title="Delete" style="background: #d50000;">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
	                                        	</form>
	                                        </td>
	                                    </tr>
                                    </tbody>
                            	@endforeach
                            </table>
                            <!-- Table  -->
                            <div class="float-right">
                                {{$sliders->links()}}
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
            </main>

@endsection

                                        