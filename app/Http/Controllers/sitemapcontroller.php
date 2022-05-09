<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companytb;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use DB;

class sitemapcontroller extends Controller
{
    public function set_sitemap()
    {
        //creat new sitemap object
	$sitemap =App::make("sitemap");
	
	//add items to the sitemap(url,date,priority,freq)
	$sitemap->add(URL::to('home'),'2022-05-25T20:10:00+02:00','1.0','daily');
	$sitemap->add(URL::to('about'),'2022-05-25T20:10:00+02:00','1.0','daily');
	$sitemap->add(URL::to('plans'),'2022-05-25T20:10:00+02:00','1.0','daily');
	$sitemap->add(URL::to('terms_conditons'),'2022-05-25T20:10:00+02:00','1.0','daily');
	$sitemap->add(URL::to('privacy_policy'),'2022-05-25T20:10:00+02:00','1.0','daily');
	$sitemap->add(URL::to('categories'),'2022-05-25T20:10:00+02:00','1.0','daily');
	$sitemap->add(URL::to('contactus'),'2022-05-26T12:30:00+02:00','0.9','monthly');
	
	//get all post from db
	$companys=DB::table('companytbs')->orderBy('created_at','desc')->get();
	
	//add every post to the sitepmap
	foreach($companys as $company)
	{
		$sitemap->add(URL::to('profile/'.$company->company.'/'),$company->created_at,'1.0','daily');
	}
	//generete your sitemap(format,filename)
	$sitemap->store('xml','sitemap');
	return redirect(url('sitemap.xml'));
    }
}
