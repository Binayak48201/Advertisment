@extends('admin.layouts.master')

@section('content')

	<main class="pt-5 mx-lg-5">

        <div class="container-fluid mt-5">       

            <!--Card-->
            <div class="card">

                        <!--Card content-->
                        <div class="card-body">
                        	<a href="/admin/add_brands">
								<button type="button" class="btn btn-success">+ Add Brands</button><br><br>
                        	</a>
                        		
                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue lighten-4">
                                    <tr>
                                        <th>S.N</th>
                                        <th>Name</th>
                                        <th>Visits</th>
                                        <th>Body</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
 								
	                                <tbody>
                                           @foreach($brands as $key => $brand)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{$brand->brand_name}}</td>
                                                    <td>{{$brand->visits_brand}}</td>
                                                    <td>{{strip_tags($brand->body)}}</td>
                                                    <td><img src="/storage/brand_images/{{$brand->brand_img}}" alt="" style="width: 60px;">
                                                    </td>
                                                    <td style="display: flex;">
                                                        <a href="{{action('BrandController@edit', $brand->id)}}">
                                                            <button type="button" class="btn btn-outline-success btn-rounded waves-effect" >Edit</button>
                                                        </a>
                                                        <form action="/admin/delete_brand/{{$brand->id}}" method="POST"
                                                            onSubmit="return confirm('Are u sure you want to delete this.')">
                                                            @csrf
                                                            {{method_field('DELETE')}}
                                                            <button type="submit" class="btn btn-outline-danger btn-rounded waves-effect">Delete</button>
                                                        </form>
                                                        </td>
                                                    </tr>   
                                           @endforeach
	                               </tbody>
                               
                            </table>
                            <!-- Table  -->
                              <div class="float-right">
                                {{$brands->links()}}
                            </div> 
                        </div>

            </div>
                    <!--/.Card-->

        </div>

    </main>

@endsection
                                                    