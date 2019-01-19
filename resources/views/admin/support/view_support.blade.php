@extends('admin.layouts.master')

@section('content')

	<main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5"> 
                    <!--Card-->
                    <div class="card">
                        <!--Card content-->
                        <div class="card-body">
                        	{{-- <a href="#">
								<button type="button" class="btn btn-primary">Launch demo modal</button>           
                            </a>             --}}            		
                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue lighten-4">
                                    <tr>
                                        <th>S.N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Number</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

 								@foreach($supps as $key=>$sup)
	                                <tbody>
	                                    <tr>
	                                        <th scope="row">{{++$key}}</th>
	                                        <td>{{$sup->name}}</td>
	                                        <td>{!! $sup->email !!}</td>
                                            <td>{{$sup->number}}</td>
	                                        <td>{{substr(strip_tags($sup->body), 0,50)}} 
                                                <a href="#" class="btn btn-link" style="color:#00aeff; text-decoration:#2196f3 wavy underline;" data-toggle="modal" 
                                                    data-target="#basicExampleModal{{$sup->id}}">
                                                    {{strlen(strip_tags($sup->body)) > 50 ? "...Read More" : ""}}
                                                </a>
                                                <div class="modal fade right" id="basicExampleModal{{$sup->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-side modal-top-right" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header" style="background-color: #00c851; color: #fff;text-align: justify;">
                                                          <h4 class="modal-title w-100" id="myModalLabel">From {{$sup->name}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal"          aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {{strip_tags($sup->body)}}
                                                        </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                            </td>
	                                        <td style="display: flex;">
	                                        	 <form action="{{action('AdvertismentController@destroy', $sup->id)}}" method="POST"
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
                            <div class="float-right">
                                {{$supps->links()}}
                            </div>
                </div>
            </div>
        </div>
    </main>

@endsection
                                    