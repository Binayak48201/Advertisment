@extends('admin.layouts.master')

@section('content')

	<main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
        

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">
                        	<a href="/admin/register">
								<button type="button" class="btn btn-success">+ Add User</button><br><br>
                        	</a>
                        		
                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue lighten-4">
                                    <tr>
                                        <th>S.N</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
 								@foreach($users as $key=>$user)
	                                <tbody>
	                                    <tr>
	                                        <th scope="row">{{++$key}}</th>
	                                        <td>{{$user->name}}</td>
	                                        <td>{{$user->email}}</td>
	                                        <td style="display: flex;">
	                                        	 <form action="{{action('RegistrationController@destroy', $user->id)}}" method="POST" onSubmit="return confirm('Are u sure you want to delete this.')">
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
                                {{$users->links()}}
                            </div> 
                        </div>

                    </div>
                    <!--/.Card-->

                </div>

    </main>

@endsection
                                                    