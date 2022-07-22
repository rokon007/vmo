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
            $image_new_name = Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
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
    public function show($post)
    {
		$Announcement = Announcement::find($post);
        return view('admin.announcement.show', compact('Announcement'));
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
        $Announcement = Announcement::find($post);
       // $categories = Blog_Category::all();
        return view('admin.announcement.edit', compact(['post', 'Announcement']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, announcement $announcement)
    {
        $this->validate($request, [
           // 'title' => "required|unique:announcements,title, $announcement->id",
            'description' => 'required',
            //'category' => 'required',
        ]);
        
        $announcement->title = $request->title;
        $announcement->slug = Str::slug($request->title);
        $announcement->description = $request->description;
       // $post->category_id = $request->category;

        //$post->tags()->sync($request->tags);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $image->move('storage/announcement/', $image_new_name);
            $announcement->image = '/storage/announcement/' . $image_new_name;
        }

        $announcement->save();

        Session::flash('success', 'Announcement updated successfully');
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
    public function destroy(announcement $announcement)
    {
        if($announcement){
            if(file_exists(public_path($announcement->image))){
                unlink(public_path($announcement->image));
            }

            $announcement->delete();
            Session::flash('Announcement deleted successfully');
        }

        return redirect()->back();
    }
}


