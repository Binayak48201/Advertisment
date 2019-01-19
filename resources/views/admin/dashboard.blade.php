@extends('admin.layouts.master')

@section('content')
<!--Main Navigation-->


<!--Main layout-->
<main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">
      <div class="card mb-4 wow fadeIn">
          <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-md-4">
                <div class="card card-inverse card-primary" style="background: linear-gradient(40deg,#2096ff,#05ffa3)!important;color: white;">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="m-r-20 align-self-center">
                                <h1 class="text-white"><i class="fa fa-adn" aria-hidden="true"></i></h1>
                            </div>
                            <div>
                                <h3 class="card-title">&nbsp;Advertisment</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <h2 class="font-light text-white">{{$advcount}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card card-inverse card-primary" style="background: linear-gradient(40deg,#ff6ec4,#7873f5)!important;color: white;">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="m-r-20 align-self-center">
                                <h1 class="text-white"><i class="fa fa-user"></i></h1></div>
                                <div>
                                    <h3 class="card-title">Total Admin User</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 align-self-center">
                                    <h2 class="font-light text-white">{{$usercount}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="card card-inverse card-primary" style="background: linear-gradient(40deg,#ffd86f,#fc6262)!important;color: white;">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="m-r-20 align-self-center">
                                    <h1 class="text-white"><i class="fa fa-clone" aria-hidden="true"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Total Category</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-light text-white">{{$catcount}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--END OF FIRST ROW-->
            </div>
        </div>

        <div class="container-fluid mt-5">
          <div class="card mb-4 wow fadeIn">
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-md-4">
                    <div class="card card-inverse card-primary" style="background: linear-gradient(40deg,#45cafc,#303f9f)!important;color: white;">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="m-r-20 align-self-center">
                                    <h1 class="text-white"><i class="fa fa-newspaper-o" aria-hidden="true"></i></h1>
                                </div>
                                <div>
                                    <h3 class="card-title">&nbsp;Total News</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 align-self-center">
                                    <h2 class="font-light text-white">{{$newscount}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="card card-inverse card-primary" style="background:linear-gradient(to top,#30cfd0 0,#330867 100%);color: white;">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="m-r-20 align-self-center">
                                    <h1 class="text-white"><i class="fa fa-sliders" aria-hidden="true"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">&nbsp;Total Big Slider</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-light text-white">{{$bigcount}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="card card-inverse card-primary" style="background: linear-gradient(120deg,#f093fb 0,#f5576c 100%);color: white;">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="fa fa-slideshare" aria-hidden="true"></i></h1></div>
                                        <div>
                                            <h3 class="card-title">&nbsp;Total Small Slider</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <h2 class="font-light text-white">{{$smallcount}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--END OF SECOND ROW-->
                </div>
            </div>

            <div class="container-fluid mt-5">
              <div class="card mb-4 wow fadeIn">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-md-4">
                        <div class="card card-inverse card-primary" style="background:linear-gradient(120deg,#d4fc79 0,#96e6a1 100%);color: white;">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="fa fa-tags" aria-hidden="true"></i></h1>
                                    </div>
                                    <div>
                                        <h3 class="card-title">&nbsp;Total Brands</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-light text-white">{{$brandcount}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="card card-inverse card-primary" style="background: linear-gradient(to right, rgb(255, 81, 47), rgb(221, 36, 118));color: white;">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="fa fa-sliders" aria-hidden="true"></i></h1></div>
                                        <div>
                                            <h3 class="card-title">&nbsp;Total Page Visited</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <h2 class="font-light text-white">{{$pagecount[0]->hits}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2>Create a Task</h2>
                        <form action="/admin/dashboard" method="POST">
                            @csrf
                            <input type="text" name="task" required>
                            <button type="submit" class="btn btn-success" name="submit">Create</button>
                        </form>

                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                     @foreach($tasks as $task)
                                     <form action="/admin/dashboard/{{$task->id}}" method="POST">
                                        @method('PATCH')
                                        @csrf
                                        <label for="checkbox {{$task->completed ? 'completeds' : ''}}" for="completed"></label>
                                        <input type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ? 'checked':''}}>
                                        {{$task->task}}
                                    </form>
                                @endforeach

                                </div>
                                <div class="col-md-6">
                                    <a href="">
                                        <i class="fa fa-window-close" aria-hidden="true"></i>
                                    </a>
                                </div>
                         </div>
                     </div>
                 </div>
             </div></div>
         </div>
         </main>

     @endsection