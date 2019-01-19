<?php

namespace App\Http\Controllers;

use App\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct()

    {
        $this->middleware('auth')->except(['create','store']);

    }

    public function index()
    {
        $supps = Support::latest()->paginate(5);
        return view('admin.support.view_support',compact('supps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layouts.contact');
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
            'name' => 'required',
            'email'=>'required',
            'number' => 'required',
            'body' => 'required'
        ]);

        $supps = Support::create([
            'name' => request('name'),
            'email' => request('email'),
            'number' => request('number'),
            'body' => request('body')
        ]);
         return redirect('/')->with('flash','Your Question has been published');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function show(Support $support)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function edit(Support $support)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Support $support)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function destroy(Support $support)
    {
        //
    }
}
