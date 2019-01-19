<?php

namespace App\Http\Controllers;

use App\Smallslider;
use Illuminate\Http\Request;

class SmallsliderController extends Controller
{

    public function __construct()

    {
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Smallslider::latest()->paginate(10);
        return view('admin.smallslider.manageslider',compact('sliders'));
    }


    public function create()
    {
        return view('admin.smallslider.add_slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'offprice'=>'required',
            'count_down' => 'required',
            'visit' => 'required',
            'body' => 'required'
        ]);

            if($request->hasFile('slider_img')){
            $filenameWithExt = $request->file('slider_img')->getClientOriginalName();
            // Get Just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just ext
            $extension = $request->file('slider_img')->getClientOriginalExtension();
            // Filename To Store
            $sliderimagetostore = $filename.'_'.time().'.'.$extension;
            // Uplopad the image
            $path =$request->file('slider_img')->storeAs('public/smallslider_images', $sliderimagetostore);
        }else{
            $sliderimagetostore ='noimage.jpg';          
        }
         
       $adv = Smallslider::create([
            'title' => request('title'),
            'offprice' => request('offprice'),
            'count_down' => request('count_down'), 
            'visit' => request('visit'),
            'body' => request('body'),
            'slider_img' => $sliderimagetostore
        ]);
        return redirect('admin/slider')->with('flash','Your Slider has been published');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Smallslider  $smallslider
     * @return \Illuminate\Http\Response
     */
    public function show(Smallslider $smallslider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Smallslider  $smallslider
     * @return \Illuminate\Http\Response
     */
    public function edit($smallslider)
    {
        $smallslider = Smallslider::findOrFail($smallslider);
        return view('admin.smallslider.edit_slider',compact('smallslider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Smallslider  $smallslider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $smallslider)
    {
        $this->validate($request,[
            'title' => 'required',
            'offprice'=>'required',
            'count_down' => 'required',
            'visit' => 'required',
            'body' => 'required'
        ]);

            if($request->hasFile('slider_img')){
            $filenameWithExt = $request->file('slider_img')->getClientOriginalName();
            // Get Just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just ext
            $extension = $request->file('slider_img')->getClientOriginalExtension();
            // Filename To Store
            $sliderimagetostore = $filename.'_'.time().'.'.$extension;
            // Uplopad the image
            $path =$request->file('slider_img')->storeAs('public/smallslider_images', $sliderimagetostore);
        }else{
            $sliderimagetostore ='noimage.jpg';          
        }

        $smallslider = Smallslider::find($smallslider);
        $smallslider->title = request('title');
        $smallslider->offprice = request('offprice');
        $smallslider->count_down = request('count_down');
        $smallslider->visit = request('visit');
        $smallslider->body = request('body');

        
        if($request->hasFile('slider_img')){
            $smallslider->slider_img = $sliderimagetostore;
        }
       $smallslider->save();

        return redirect('/admin/slider')->with('flash','Your Smallslider has been Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Smallslider  $smallslider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Smallslider::find($id)->delete();
        return redirect('/admin/slider')->with('flash','Sucessfully Deleted');
    }
}
