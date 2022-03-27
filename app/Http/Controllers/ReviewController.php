<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reviews;
use App\Models\VimbisoUser;
use DB;
use App\Models\Companytb;
use Excel;
use App\Imports\reviewsImport;
use App\Exports\reviewsExport;
use Laravel\Socialite\Facades\Socialite;


class ReviewController extends Controller
{

public function facebookcallback()
   {

    $user = Socialite::driver('facebook')->user();
 
   // return  $user->token;
    

     return empty($user->email)
            ? $this->sendFailedResponse("No email id returned from  provider.")
            : $this->loginOrCreateAccount($user, $driver);



   
   }
    
  public function googlecallback()
   {

    $user = Socialite::driver('google')->user();
 
   // return  $user->token;
    

     return empty($user->email)
            ? $this->sendFailedResponse("No email id returned from {$driver} provider.")
            : $this->loginOrCreateAccount($user, $driver);



   // return view('frontpage.socialreviews',compact('user','CompanyNameData'));
   


   // try {
   //          $user = Socialite::driver('google')->user();
   //          $user = User::firstOrCreate([
   //              'email' =>$user->getEmail()
   //          ],[
   //              'name' => $user->getName(),
   //              'password' => Hash::make(Str::random(24))
   //          ]);
   //          Auth::login($user, true);
   //          return redirect('/dashboard');
   //      } catch (\Throwable $th) {
   //          return redirect('/login')->withError('Something went wrong! '.$th->getMessage());
   //      }
   }
    protected function sendFailedResponse($msg = null)
    {
        dd('mistake');
        // return redirect()->route('login')
        //     ->withErrors(['msg' => $msg ?: 'Unable to login, try with another provider to login.']);

        return view('frontpage.socialreviews') ->withErrors(['msg' => $msg ?: 'Unable to login, try with another provider to login.']);
    }


   public function create()
   {
    $ReviewData=reviews::whereNull('show')->get();
     //company name sending  company_name
      $CompanyNameData=Companytb::All();
     
    
     return view('admin.reviews',compact('ReviewData','CompanyNameData'));
   }

protected function loginOrCreateAccount($providerUser, $driver)
    {
        echo 'ok rokon';
    }
  
   public function store(Request $request)
   {
     // $data = array(
     //    'name'=> $request->name,        
     //    'contact'=> $request->contact,
     //    'purchaseditem'=> $request->purchaseditem,
     //    'itemcounter'=> $request->itemcounter,
     //    'dateofpurchase'=> $request->dateofpurchase,
     //    'branchlocation'=> $request->branchlocation,
     //    'review'=> $request->review,
     //    'ratings'=> $request->ratings,
     //    'typeofpurchase'=> $request->typeofpurchase,
     //    'resolved'=> $request->resolved,
     //    'response'=> $request->response,
     //    'isresolved'=> $request->isresolved,
     //    'whatsappreview'=> $request->whatsappreview,
     //    'company_id'=> $request->company,
     //    'unlistedcompany'=> $request->unlistedcompany,
     //  );
     // $create=reviews::create($data);

      $reviews= new reviews;
      $reviews->name=$request->input('name');
      $reviews->contact=$request->input('contact');     
      $reviews->purchaseditem=$request->input('purchaseditem');
      $reviews->itemcounter=$request->input('itemcounter');
      $reviews->dateofpurchase=$request->input('dateofpurchase');
      $reviews->branchlocation=$request->input('branchlocation');
      $reviews->review=$request->input('review');
      $reviews->ratings=$request->input('ratings');
      $reviews->typeofpurchase=$request->input('typeofpurchase');
      $reviews->response=$request->input('response');
      $reviews->company_id=$request->input('company_id');
      $reviews->unlistedcompany=$request->input('unlistedcompany');
      if($request->has('resolved')){
          $resolved = implode(',', $request->input('resolved'));
           $reviews->resolved = $resolved;
        }else{
            $resolved = 0;
           $reviews->resolved = $resolved;
        }
        if($request->has('isresolved')){
          $isresolved = implode(',', $request->input('isresolved'));
          $reviews->isresolved = $isresolved;
        }else{
           $isresolved = 0;
          $reviews->isresolved = $isresolved;
        }
         if($request->has('whatsappreview')){
         $whatsappreview = implode(',', $request->input('whatsappreview'));
          $reviews->whatsappreview = $whatsappreview;
        }else{
             $whatsappreview = 0;
          $reviews->whatsappreview = $whatsappreview;
        }
      $reviews->save();

     return redirect()->route('reviews.create')->with('success','Review aded Successfully');
   }

   public function exportreviews()
    {
        return Excel::download(new reviewsExport,'reviews.xlsx');

    }

   public function importreviews(Request $request)
    {
      // $this->validate($request,['select_file' =>'required|mimes:xls,xlsx']);
     
       Excel::import(new reviewsImport,$request->file('file'));
      
       return back()->with('success','Excel Data Imported successfully');
    }

 /* public function delete($id)
     {reviews
       $data=reviews::find($id);
       $data->delete();
       return redirect()->route('reviews.create');
     }*/

     public function delete_funtion($id)
     {
      DB::delete('delete from reviews where id=?',[$id]);
      return redirect()->route('reviews.create')->with('success','Data deleted Successfully');
     }
      public function edit_funtion($id)
     {
        $RData = DB::table('companytbs')
            ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
             
              
            ->select('companytbs.company','reviews.company_id as id','reviews.*','companytbs.id  as company_id')
             ->where('reviews.id',$id)
           ->first();
        $CompanyNameData=Companytb::All();
        // return $RData;
       return view('admin.review_edit',compact('RData','CompanyNameData'));
     }
     
     public function updatereview_funtion(Request $request, int $id)
{
      $reviews = reviews::find($id); 
      $reviews->name=$request->input('name');
      $reviews->contact=$request->input('contact');     
      $reviews->purchaseditem=$request->input('purchaseditem');
      $reviews->itemcounter=$request->input('itemcounter');
      $reviews->dateofpurchase=$request->input('dateofpurchase');
      $reviews->branchlocation=$request->input('branchlocation');
      $reviews->review=$request->input('review');
      $reviews->ratings=$request->input('ratings');
      $reviews->typeofpurchase=$request->input('typeofpurchase');
      $reviews->response=$request->input('response');
      $reviews->company_id=$request->input('company_id');
      $reviews->unlistedcompany=$request->input('unlistedcompany');
      if($request->has('resolved')){
          $resolved = implode(',', $request->input('resolved'));
           $reviews->resolved = $resolved;
        }else{
            $resolved = 0;
           $reviews->resolved = $resolved;
        }
        if($request->has('isresolved')){
          $isresolved = implode(',', $request->input('isresolved'));
          $reviews->isresolved = $isresolved;
        }else{
           $isresolved = 0;
          $reviews->isresolved = $isresolved;
        }
         if($request->has('whatsappreview')){
         $whatsappreview = implode(',', $request->input('whatsappreview'));
          $reviews->whatsappreview = $whatsappreview;
        }else{
             $whatsappreview = 0;
          $reviews->whatsappreview = $whatsappreview;
        }

      $reviews->update();
       
    return redirect()->route('reviews.create')->with('status','Reviews Updated Successfully');
}


}
