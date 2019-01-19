@extends('admin.layouts.master')

@section('content')

	<main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
        

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <a href="/admin/add">
                                        <button type="button" class="btn btn-success">+ Add Advertisment</button><br><br>
                                    </a>
                                </div>
                            <div class="col" style="display: flex;justify-content: flex-end;">

                                <form method="get" action="/admin/advertisement">
                                    <input type="text" name="s" placeholder="Search.." value="{{isset($s) ? $s : ''}}"> 
                                    <button type="submit" class="btn btn-info btn-rounded btn-sm waves-effect waves-light" style="background-image: linear-gradient(to right, rgb(237, 110, 160) 0%, rgb(236, 140, 105) 100%);">Search
                                    </button>
                                </form>
                            </div>
                        </div>
                                
                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue lighten-4">
                                    <tr>
                                        <th>S.N</th>
                                        <th>Brand Name</th>
                                        <th>Place</th>
                                        <th>Visits</th>
                                        <th>Discount</th>
                                        <th>Count Down</th>
                                        <th>Previous Price</th>
                                        <th>Available Price</th>
                                        <th>Body</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
 								@forelse($advs as $key=>$adv)
                                    
	                                <tbody>
	                                    <tr>
	                                        <th scope="row">
                                                {{++$key}}
                                            </th>

	                                        <td>
                                                <p>{!!$adv->title!!}</p>
                                            </td>

                                            <td>
                                                <p>{{$adv->place}}</p>
                                            </td>                                            

                                            <td>
                                                <p>{{$adv->visits}}</p>
                                            </td>

                                            <td>
                                                <p>{{$adv->discount}}</p>
                                            </td>

                                            <td>
                                               {{$adv->count_down}}
                                            </td>

                                            <td>
                                                <p>{{$adv->str_price}}</p>
                                            </td>
    
                                            <td>
                                                <p>{{$adv->place}}</p>
                                            </td>

	                                        <td>
                                                {{ substr($adv->body,0,20)}} 
                                                <a href="#" class="btn btn-link" style="color:#00aeff; text-decoration:#2196f3 wavy underline;" data-toggle="modal" data-target="#basicExampleModal{{$adv->id}}">
                                                    {{strlen($adv->body)>20?"View More..." : ""}}
                                                </a>
                                                <div class="modal fade " id="basicExampleModal{{$adv->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-top-center" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header" style="background-color: #00c851; color: #fff;text-align: justify;">
                                                          <h4 class="modal-title w-100" id="myModalLabel">{{strip_tags($adv->title)}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal"          aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {{$adv->body}}
                                                        </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                            </td>
                                       
	                                        <td><img src="/storage/cover_images/{{$adv->adv_img}}" style="width: 60px;"></td>
	                                        <td style="display: flex;">
                                                <a href="{{action('AdvertismentController@edit', $adv->id)}}">
                                                    <button type="button" title="Edit" style="background: #00e676;">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a> &nbsp;
	                                        	 <form action="{{action('AdvertismentController@destroy', $adv->id)}}" method="POST"
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
                            	@empty
                                <h4 class="text-center">There is no revelent result at this time.</h4>
                                @endforelse
                            </table>
                            <!-- Table  -->
                            <div class="float-right">
                                {{$advs->links()}}
                            </div> 
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
            </main>

@endsection

                                        