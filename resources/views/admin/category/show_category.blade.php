@extends('admin.layouts.master')

@section('content')

	<main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">       

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">
                        	<a href="/admin/add_category">
								<button type="button" class="btn btn-success">+ Add Category</button><br><br>
                        	</a>
                        		
                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue lighten-4">
                                    <tr>
                                        <th>S.N</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
 								@foreach($cates as $key=>$cate)
	                                <tbody>
	                                    <tr>
	                                        <th scope="row">{{++$key}}</th>
	                                        <td>{{$cate->name}}</td>
	                                        <td>{{$cate->slug}}</td>
	                                        <td style="display: flex;">
                                                <a href="{{action('AdvertismentController@edit', $cate->id)}}">
                                                    <button type="button" class="btn btn-outline-success btn-rounded waves-effect" >Edit</button>
                                                </a>
	                                        </td>
	                                    </tr>
	                                </tbody>
                            	@endforeach
                            </table>
                            <!-- Table  -->
                             <div class="float-right">
                                {{$cates->links()}}
                            </div> 
                        </div>

                    </div>
                    <!--/.Card-->

                </div>

    </main>

@endsection
                                                    