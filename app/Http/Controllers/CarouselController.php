<?php

namespace App\Http\Controllers;

use App\carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = Carousel::latest()->paginate(10);
        return view('admin.carousel.show_carousel',compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carousel.add_carousel');
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
            'slider_img' => 'required'
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
            $path =$request->file('slider_img')->storeAs('public/slider_images', $sliderimagetostore);
        }else{
            $sliderimagetostore ='noimage.jpg';          
        }
         
       $adv = Carousel::create([
            'title' => request('title'),
            'body' => request('body'),
            'slider_img' => $sliderimagetostore
        ]);
        return redirect('admin/carousel')->with('flash','Your Slider has been published');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit($carousel)
    {
        $carousel = Carousel::findOrFail($carousel);
        return view('admin.carousel.edit_carousel',compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $carousel)
    {
        $this->validate($request,[
            'slider_img' => 'required'
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
            $path =$request->file('slider_img')->storeAs('public/slider_images', $sliderimagetostore);
        }else{
            $sliderimagetostore ='noimage.jpg';          
        }

        $carousel = Carousel::find($carousel);
        $carousel->title = request('title');
        $carousel->body = request('body');
        
        if($request->hasFile('slider_img')){
            $carousel->slider_img = $sliderimagetostore;
        }
       $carousel->save();

        return redirect('/admin/carousel')->with('flash','Your Slider has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Carousel::find($id)->delete();
        return redirect('/admin/carousel')->with('flash','Sucessfully Deleted');
    }
}
