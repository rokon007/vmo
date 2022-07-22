<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Blog_Category;
use App\Models\Rewards;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RewardsController extends Controller
{
    
	 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Rewards::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.rewards.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Blog_Category::all();
        return view('admin.rewards.create', compact(['categories', 'tags']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:posts,title',
            'image' => 'required|image',
            'description' => 'required',
            //'category' => 'required',
        ]);

        $post = Rewards::create([
            'title' => $request->title,
			'dlink' => $request->dlink,
            'slug' => Str::slug($request->title),
            'image' => 'image.jpg',
            'description' => $request->description,
            //'category_id' => $request->category,
			//'category' => $request->category,
           // 'user_id' => auth()->user()->id,
            'published_at' => Carbon::now(),
        ]);

       // $post->tags()->attach($request->tags);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $image->move('storage/rewards/', $image_new_name);
            $post->image = '/storage/rewards/' . $image_new_name;
            $post->save();
        }

        Session::flash('success', 'Rewards created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
		 $Rewards = Rewards::find($post);
        return view('admin.rewards.show', compact('Rewards'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    //public function edit(Announcement $post)
    //{
      //  $tags = Tag::all();
      //  $categories = Blog_Category::all();
     //   return view('admin.announcement.edit', compact(['post', 'categories', 'tags']));
   // }
	
	 public function edit( $post)
    {
        $Rewards = Rewards::find($post);
       // $categories = Blog_Category::all();
        return view('admin.rewards.edit', compact(['post', 'Rewards']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
   
	 public function update(Request $request, rewards $reward)
    {
        $this->validate($request, [
           // 'title' => "required|unique:announcements,title, $rewards->id",
            'description' => 'required',
            //'category' => 'required',
        ]);
        
        $reward->title = $request->title;
		$reward->dlink = $request->dlink;
        $reward->slug = Str::slug($request->title);
        $reward->description = $request->description;
       // $post->category_id = $request->category;

        //$post->tags()->sync($request->tags);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $image->move('storage/rewards/', $image_new_name);
            $reward->image = '/storage/rewards/' . $image_new_name;
        }

        $reward->save();

        Session::flash('success', 'Rewards updated successfully');
        return redirect()->back();

    // $announcements = Announcement::find($post);

    //      $announcements->title = $request->title;
    //      $announcements->slug = Str::slug($request->title);
    //      $announcements->description = $request->description;
    //          if($request->hasFile('image')){
    //         $image = $request->image;
    //         $image_new_name = time() . '.' . $image->getClientOriginalExtension();
    //         $image->move('storage/announcement/', $image_new_name);
    //         $announcements->image = '/storage/announcement/' . $image_new_name;
    //     }
    //     $announcements->save();
    //     Session::flash('success', 'Announcement updated successfully');
    //     return redirect()->back();
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(rewards $reward)
    {
        if($reward){
            if(file_exists(public_path($reward->image))){
                unlink(public_path($reward->image));
            }

            $reward->delete();
            Session::flash('Rewards deleted successfully');
        }

        return redirect()->back();
    }
}
