<?php

namespace App\Http\Controllers;

use App\Advertisment;
use App\Brand;
use App\Carousel;
use App\Channel;
use App\Homecounter;
use App\News;
use App\Smallslider;
use App\Task;
use App\User;
use Illuminate\Http\Request;
class AdminController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Advertisment $advertisment)
    {
        $tasks = Task::latest()->get();
    	$usercount = User::count();
    	$advcount = Advertisment::count();
    	$catcount = Channel::count();
    	$newscount = News::count();
    	$bigcount = Carousel::count();
    	$smallcount = Smallslider::count();
        $brandcount = Brand::count();
    	$advertisment = Advertisment::get()->all();
        $pagecount = Homecounter::get()->all();
    	return view('admin.dashboard',
            compact('advertisment','usercount','advcount','catcount','newscount','smallcount','bigcount','brandcount','pagecount','tasks'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'task' => 'required'
        ]);

        $adv = Task::create([
            'task' => request('task')
        ]);
         return redirect('/admin/dashboard')->with('flash','Your task has been created');
    }

    public function update(Task $task)
    {
        $task->update([
            'completed' => request()->has('completed')
        ]);
        return back()->with('flash','Your task has been completed');
    }
}
