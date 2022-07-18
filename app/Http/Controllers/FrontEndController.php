<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Tag;
use App\Models\User;
use App\Models\Post;
use App\Models\Announcement;
use App\Models\Blog_Category;
use Illuminate\Http\Request;
use DB;
use Share;

class FrontEndController extends Controller
{
    public function home(){
        $posts = Post::with('blog_category', 'user')->orderBy('created_at', 'DESC')->take(5)->get();
        $firstPosts2 = $posts->splice(0, 2);
        $middlePost = $posts->splice(0, 1);
        $lastPosts = $posts->splice(0);

        $footerPosts = Post::with('blog_category', 'user')->inRandomOrder()->limit(4)->get();
        $firstFooterPost = $footerPosts->splice(0, 1);
        $firstfooterPosts2 = $footerPosts->splice(0, 2);
        $lastFooterPost = $footerPosts->splice(0, 1);

        $recentPosts = Post::with('blog_category', 'user')->orderBy('created_at', 'DESC')->paginate(9);
        return view('frontpage.website.home', compact(['posts', 'recentPosts', 'firstPosts2', 'middlePost', 'lastPosts', 'firstFooterPost', 'firstfooterPosts2', 'lastFooterPost']));
    }

   
   //Announcement_show
   public function Announcement_show(){
	   $posts = DB::table('announcements')->orderBy('created_at', 'DESC')->take(5)->get();
        //$posts = Announcement::All()->orderBy('created_at', 'DESC')->take(5)->get();
        $firstPosts2 = $posts->splice(0, 2);
        $middlePost = $posts->splice(0, 1);
        $lastPosts = $posts->splice(0);

        //$footerPosts = Announcement::All()->inRandomOrder()->limit(4)->get();
		 $footerPosts = DB::table('announcements')->inRandomOrder()->limit(4)->get();
        $firstFooterPost = $footerPosts->splice(0, 1);
        $firstfooterPosts2 = $footerPosts->splice(0, 2);
        $lastFooterPost = $footerPosts->splice(0, 1);

        //$recentPosts = Announcement::All()->orderBy('created_at', 'DESC')->paginate(9);
		$recentPosts = DB::table('announcements')->orderBy('created_at', 'DESC')->paginate(9);
        return view('frontpage.announcement.home', compact(['posts', 'recentPosts', 'firstPosts2', 'middlePost', 'lastPosts', 'firstFooterPost', 'firstfooterPosts2', 'lastFooterPost']));
    }
	//rewards_show
	 public function rewards_show(){
	   $posts = DB::table('rewards')->orderBy('created_at', 'DESC')->take(5)->get();
        //$posts = Announcement::All()->orderBy('created_at', 'DESC')->take(5)->get();
        $firstPosts2 = $posts->splice(0, 2);
        $middlePost = $posts->splice(0, 1);
        $lastPosts = $posts->splice(0);

        //$footerPosts = Announcement::All()->inRandomOrder()->limit(4)->get();
		 $footerPosts = DB::table('rewards')->inRandomOrder()->limit(4)->get();
        $firstFooterPost = $footerPosts->splice(0, 1);
        $firstfooterPosts2 = $footerPosts->splice(0, 2);
        $lastFooterPost = $footerPosts->splice(0, 1);

        //$recentPosts = Announcement::All()->orderBy('created_at', 'DESC')->paginate(9);
		$recentPosts = DB::table('rewards')->orderBy('created_at', 'DESC')->paginate(9);
        return view('frontpage.rewards.home', compact(['posts', 'recentPosts', 'firstPosts2', 'middlePost', 'lastPosts', 'firstFooterPost', 'firstfooterPosts2', 'lastFooterPost']));
    }
	
    public function category($slug){
        $category = Blog_Category::where('slug', $slug)->first();
        if($category){
            $posts = Post::where('category_id', $category->id)->paginate(9);

            return view('frontpage.website.category', compact(['category', 'posts']));
        }else {
            return redirect()->route('website');
        }
    }
   
    public function tag($slug){
        $tag = Tag::where('slug', $slug)->first();
        if($tag){
            $posts = $tag->posts()->orderBy('created_at', 'desc')->paginate(9);

            return view('frontpage.website.tag', compact(['tag', 'posts']));
        }else {
            return redirect()->route('website');
        }
    }
   
    
   
    public function post($slug){
        $post = Post::with('Blog_Category', 'user')->where('slug', $slug)->first();
        $posts = Post::with('Blog_Category', 'user')->inRandomOrder()->limit(3)->get();
		$title=$post->title;

        // More related posts
        $relatedPosts = Post::orderBy('category_id', 'desc')->inRandomOrder()->take(4)->get();
        $firstRelatedPost = $relatedPosts->splice(0, 1);
        $firstRelatedPosts2 = $relatedPosts->splice(0, 2);
        $lastRelatedPost = $relatedPosts->splice(0, 1);

        $categories = Blog_Category::all();
        $tags = Tag::all();
		
		 $socialShare=Share::page('https://vimbiso.org/post/'"$slug","$title")
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp()
        ->telegram()
        ->getRawLinks();	

        if($post){
            return view('frontpage.website.post', compact(['socialShare','post', 'posts', 'categories', 'tags', 'firstRelatedPost', 'firstRelatedPosts2', 'lastRelatedPost']));
        }else {
            return redirect('/');
        }
    }
	//announcement_post
	 public function announcement_post($slug){
        $post = DB::table('announcements')->where('slug', $slug)->first();
        $posts = DB::table('announcements')->inRandomOrder()->limit(3)->get();
        
        // More related posts
        

        $categories = Blog_Category::all();
        $tags = Tag::all();
		$title= $post->title;
		 $socialShare=Share::page('https://vimbiso.org/announcement/'"$slug","$title")
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp()
        ->telegram()
        ->getRawLinks();

        if($post){
            return view('frontpage.announcement.post', compact(['socialShare','post', 'posts', 'categories', 'tags']));
        }else {
            return redirect('/');
        }
    }

   //rewards_post 
    public function rewards_post($slug){
        $post = DB::table('rewards')->where('slug', $slug)->first();
        $posts = DB::table('rewards')->inRandomOrder()->limit(3)->get();

        // More related posts
        

        $categories = Blog_Category::all();
        $tags = Tag::all();
		
		$title= $post->title;
		 $socialShare=Share::page('https://vimbiso.org/rewards_post/'"$slug","$title")
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp()
        ->telegram()
        ->getRawLinks();

        if($post){
            return view('frontpage.rewards.post', compact(['socialShare','post', 'posts', 'categories', 'tags']));
        }else {
            return redirect('/');
        }
    }
}

