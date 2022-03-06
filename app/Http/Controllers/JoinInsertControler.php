<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DB;
use App\Models\Companytb;

class JoinInsertControler extends Controller
{
   public function Saverecord(Request $request)
   {
    DB::beingTransaction();
    try{
        $companytbs= new Companytb;

        $companytbs->company=$request->name;
        $companytbs->company=$request->country;
        $companytbs->company=$request->city;
        $companytbs->company=$request->block;
    }
   }
}
