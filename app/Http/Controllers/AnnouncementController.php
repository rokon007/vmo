<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Blog_Category;
use App\Models\Announcement;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    
	 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Announcement::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.announcement.index', compact('posts'));
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
        return view('admin.announcement.create', compact(['categories', 'tags']));
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

        $post = Announcement::create([
            'title' => $request->title,
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
            $image->move('storage/announcement/', $image_new_name);
            $post->image = '/storage/announcement/' . $image_new_name;
            $post->save();
        }

        Session::flash('success', 'Announcement created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.announcement.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        $categories = Blog_Category::all();
        return view('admin.snnouncement.edit', compact(['post', 'categories', 'tags']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => "required|unique:posts,title, $post->id",
            'description' => 'required',
            //'category' => 'required',
        ]);
        
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->description = $request->description;
       // $post->category_id = $request->category;

        //$post->tags()->sync($request->tags);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/announcement/', $image_new_name);
            $post->image = '/storage/announcement/' . $image_new_name;
        }

        $post->save();

        Session::flash('success', 'Announcement updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post){
            if(file_exists(public_path($post->image))){
                unlink(public_path($post->image));
            }

            $post->delete();
            Session::flash('Announcement deleted successfully');
        }

        return redirect()->back();
    }
}


