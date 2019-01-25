<?php

namespace App\Http\Controllers;
use DB;
use App\Advertisment;
use App\Channel;
use App\Carousel;
use App\News;
use App\Brand;
use App\Smallslider;
use App\Homecounter;
use Illuminate\Http\Request;
class AdvertismentController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except(['index','view','latest','increaseView']);
	}

   	public function index(Request $request)
   	{
        $s = $request->input('s');
        if ($s != '') {
            $advs = DB::table('advertisments')
                                ->where('title','LIKE','%'.$s.'%')
                                ->paginate(10); 
        }else{
       		$advs = Advertisment::latest()->paginate(10);
        }
   		return view('admin.market.show',compact('advs'));  
   	}
    
    public function view(Request $request,Channel $channel, Advertisment $newadv,Brand $brand,Homecounter $counts)
    {
        $counts->increment('hits');//Page Counter
        $slides = Carousel::latest()->get();
        $brands = Brand::latest()->get();
        $smallslider = Smallslider::latest()->get();
        $news = News::latest()->paginate(6);
        $s = $request->input('s');
        // $channels = DB::selectRaw('SELECT channels.name,channels.slug,count(*) as something
        //             FROM channels
        //             LEFT JOIN advertisments ON channels.id = advertisments.channel_id
        //             GROUP BY channels.id
        //         ');
        if($channel->exists){

            $advs =  $channel->advert()->latest()->paginate(6);
        }else{
                $advs = Advertisment::latest()->paginate(6);
        } 
        return view('index',compact('advs','slides','newadv','smallslider','news','brands','s','channels')); 
    }


    public function latest(Request $request)
    {
        $advertisments = $this->fetch($request);

        // $pop = $popularity->popular()->latest()->get();   
        
                // dd($pop);      
        return view('posts.latest_deal',compact('advertisments'));
    }

	public function create()

	{
		return view('admin.market.add_advertisment');

	}

    public function increaseView(Request $request, $id)
    {
        $advertisement = Advertisment::find($id);
        $advertisement->visits = $advertisement->visits + 1;
        $advertisement->save();
        return response()->json([
            'id' => $id,
            'data' => $advertisement
        ]);
    }

	public function store(Request $request)
	{
         $this->validate($request, [
            'title' => 'required',
            'channel_id' => 'required|exists:channels,id',
            'body' => 'required',
            'direct' => 'required',
            'adv_img' => 'required'
        ]);

        $this->store_advertisment($request);
        return redirect('admin/advertisement')->with('flash','Your Advertisment has been published');
	}

    /**  
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advertisment  $adv
     * @return \Illuminate\Http\Response
     */

    public function edit(Advertisment $adv)
    {
        return view('admin.market.edit_advert', compact('adv', 'adv'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advertisment  $adv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $adv)
    {
        // $this->authorize('update',$adv);
        
         $this->validate($request,[
            'title' => 'required',
            'channel_id'=>'required|',
            'body' => 'required',
            'adv_img' => 'required'
        ]);
         // dd(request()->all());
         if($request->hasFile('adv_img')){
            $filenameWithExt = $request->file('adv_img')->getClientOriginalName();
            // Get Just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just ext
            $extension = $request->file('adv_img')->getClientOriginalExtension();
            // Filename To Store
            $advertimagetostore = $filename.'_'.time().'.'.$extension;
            // Uplopad the image
            $path =$request->file('adv_img')->storeAs('public/cover_images', $advertimagetostore);
        }else{
            $advertimagetostore ='noimage.jpg';          
        }

        $adv = Advertisment::find($adv);
        $adv->title = $request->get('title');
        $adv->channel_id = $request->get('channel_id');
        $adv->body = $request->get('body');
        $adv->direct = $request->get('direct');
        $adv->place = $request->get('place');
        $adv->discount = $request->get('discount');
        $adv->count_down = $request->get('count_down');
        $adv->str_price = $request->get('str_price');
        $adv->price = $request->get('price');
        
        if($request->hasFile('adv_img')){
            $adv->adv_img = $advertimagetostore;
        }
       $adv->save();

        return redirect('/admin/advertisement')->with('flash','Your Advertisment has been Updated.');
    }

    public function destroy($adv)

    {           
        $advs = Advertisment::findOrFail($adv);
        $advs->delete(); 
        return redirect('admin/advertisement')->with('flash','Sucessfully Deleted.');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function fetch(Request $request)
    {
        $s = $request->input('s');
        if ($request->input('filter') != NULL) {
            if ($request->input('filter') == 'popular') {
                $advertisments = DB::table('advertisments')
                    ->orderBy('price', $request->input('sort'))
                    ->whereNotNull('price')
                    // ->paginate();
                    ->paginate(15);
            } else {
                if ($request->input('filter') == 'view') {
                    $advertisments = DB::table('advertisments')
                        ->orderBy('visits', $request->input('sort'))
                        ->whereNotNull('visits')
                        ->paginate(15);
                }
            }
        } else {
            if ($s != '') {
                $advertisments = DB::table('advertisments')
                    ->where('title', 'LIKE', '%' . $s . '%')
                    ->paginate(15);
            } else {
                $advertisments = Advertisment::latest()->paginate(15);
            }

        }
        return $advertisments;
    }

    /**
     * @param Request $request
     */
    public function store_advertisment(Request $request): void
    {
        if ($request->hasFile('adv_img')) {
            $filenameWithExt = $request->file('adv_img')->getClientOriginalName();
            // Get Just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just ext
            $extension = $request->file('adv_img')->getClientOriginalExtension();
            // Filename To Store
            $advertimagetostore = $filename . '_' . time() . '.' . $extension;
            // Uplopad the image
            $path = $request->file('adv_img')->storeAs('public/cover_images', $advertimagetostore);
        } else {
            $advertimagetostore = 'noimage.jpg';
        }

        $adv = Advertisment::create([
            'title' => request('title'),
            'channel_id' => request('channel_id'),
            'brand_id' => request('brand_id'),
            'body' => request('body'),
            'place' => request('place'),
            'discount' => request('discount'),
            'count_down' => request('count_down'),
            'str_price' => request('str_price'),
            'price' => request('price'),
            'direct' => request('direct'),
            'adv_img' => $advertimagetostore
        ]);
    }
}
