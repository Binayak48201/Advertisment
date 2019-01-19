@extends('admin.layouts.master')

@section('content')

	<main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
        

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">
                        	<a href="/admin/add-news">
								<button type="button" class="btn btn-success">+ Add News</button><br><br>
                        	</a>
                        		
                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue lighten-4">
                                    <tr>
                                        <th>S.N</th>
                                        <th>News Title</th>
                                        <th>Minimum</th>
                                        <th>Aurthor</th>
                                        <th>Created At</th>
                                        <th>Image</th>
                                        <th>Body</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
 								@foreach($news as $key=>$new)
                                    
	                                <tbody>
	                                    <tr>
	                                        <th scope="row">
                                                {{++$key}}
                                            </th>

	                                        <td>
                                                <p>{{$new->title}}</p>
                                            </td>

                                            <td>
                                                <p>{{$new->minimum}}</p>
                                            </td>

                                            <td>
                                                <p>{{$new->aurthors}}</p>
                                            </td>

                                             <td>
                                                <p>{{$new->created_at}}</p>
                                            </td>

                                            <td>
                                                <img src="/storage/news_images/{{$new->news_img}}" style="width: 60px;">
                                            </td>

	                                        <td>
                                                {!! substr($new->body,0,50)!!} 
                                                <a href="#" class="btn btn-link" style="color:#00aeff; text-decoration:#2196f3 wavy underline;" data-toggle="modal" data-target="#basicExampleModal{{$new->id}}">
                                                    {{strlen($new->body) > 50 ? "...Read More" : ""}}
                                                </a>
                                                <div class="modal fade right" id="basicExampleModal{{$new->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-side modal-top-right" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header" style="background-color: #00c851; color: #fff;text-align: justify;">
                                                          <h4 class="modal-title w-100" id="myModalLabel">{{strip_tags($new->title)}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal"          aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {{strip_tags($new->body)}}
                                                        </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                            </td>
                        
	                                        <td style="display: flex;">
                                                <a href="{{action('NewsController@edit', $new->id)}}">
                                                    <button type="button" title="Edit" style="background: #00e676;">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a> &nbsp;
	                                        	 <form action="{{action('NewsController@destroy', $new->id)}}" method="POST"
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
                                {{$news->links()}}
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
            </main>
@endsection
                                        