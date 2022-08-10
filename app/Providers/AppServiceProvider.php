<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Comment;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
   public function boot()
{
     Paginator::useBootstrap();
	 
	 // View::share('unread_count',Comment::where('comment_status','=','1')->count());
	 // View::share('unread_notifications',DB::table('comments')
	 // ->where('comments.comment_status',1)
     // ->orderBy('comments.id', 'DESC')->get());
	 //View::share('read_notifications',DB::table('comments')
    //  ->where('comments.comment_status',0)
     // ->orderBy('comments.id', 'DESC') ->simplePaginate(10)); 
}
	
}
