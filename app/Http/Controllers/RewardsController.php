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
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
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
    public function show(rewards $post)
    {
        return view('admin.rewards.show', compact('post'));
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
    public function update(Request $request, rewards $rewards)
    {
        $this->validate($request, [
           // 'title' => "required|unique:announcements,title, $announcement->id",
            'description' => 'required',
            //'category' => 'required',
        ]);
        
        $rewards->title = $request->title;
		$rewards->dlink = $request->dlink;
        $rewards->slug = Str::slug($request->title);
        $rewards->description = $request->description;
       // $post->category_id = $request->category;

        //$post->tags()->sync($request->tags);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/rewards/', $image_new_name);
            $rewards->image = '/storage/rewards/' . $image_new_name;
        }

        $rewards->save();

        Session::flash('success', 'Rewards updated successfully');
        return redirect()->back();

   
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(rewards $rewards)
    {
        if($rewards){
            if(file_exists(public_path($rewards->image))){
                unlink(public_path($rewards->image));
            }

            $rewards->delete();
            Session::flash('Rewards deleted successfully');
        }

        return redirect()->back();
    }
}
