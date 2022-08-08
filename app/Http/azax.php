composer create-project --prefer-dist laravel/laravel blog


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Ajax
DB_USERNAME=root
DB_PASSWORD=



php artisan make:model Post -m

//here -m for creating migration to corresponding model . Hope you understand. after running this command we have posts table in our database/migrations folder. So open this posts table and paste below code to two table.

database/migrations


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('details');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

//Our table is completed. Run below command to migrate those table into our database.


php artisan migrate

//

    Step 4 :  Setup route

Now time to setup our route. to create route just paste the following code.

routes/web.php

Route::get('postinsert', 'HomeController@ajaxRequest');
Route::post('postinsert', 'HomeController@ajaxRequestPost');



//Now we need HomeController to insert our data. But no need to create HomeController, we will use laravel default HomeController. 

app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('home');
    }

    public function ajaxRequest()
    {

        return view('welcome');
    }

    public function ajaxRequestPost(Request $request)
    {

        \DB::table('posts')->insert([
            'title' => $request->Code, //This Code coming from ajax request
            'details' => $request->Chief, //This Chief coming from ajax request
        ]);

        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }
}




//Here $request->Code and $request->Chief data coming from ajax request. to understand , see below code.

    Step 5 :  Create Blade File

Now we have to create our blade file to see insert form. But we will use laravel default welcome page. So open welcome page and paste the following code.
 
 <!DOCTYPE html>
<html>
<head>

    <title>Laravel 7 Ajax Request example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>

 
    <div class="container">
        <h1>Ajax Data Insert</h1>
        <form action="" class="btn-submit" method="POST">

           <div class="form-group">
                <label>Title:</label>
                <input type="text" name="title" class="form-control" placeholder="title" required="">

            </div>

            <div class="form-group">
                <label>Details:</label>
                <input type="text" name="details" class="form-control" placeholder="details" required="">
            </div>

           
            <div class="form-group">
                <button class="btn btn-success">Submit</button>
            </div>

        </form>
    </div>
</body>

<script type="text/javascript">


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e){

        e.preventDefault();

        var title = $("input[name=title]").val();
        var details = $("input[name=details]").val();
        var url = '{{ url('postinsert') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
                  Code:title, 
                  Chief:details
                },
           success:function(response){
              if(response.success){
                  alert(response.message) //Message come from controller
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
	});

</script>
</html> 





//Here  e.preventDefault(); use to restrict page reload. You can catch all the data using jQuery serialize() method.
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e){

        e.preventDefault();

        var data = $(this).serialize();
        console.log(data);
        var url = '{{ url('postinsert') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:data,
           success:function(response){
              if(response.success){
                  alert(response.message) //Message come from controller
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
	});


//Look this procedure we don't have below code
var title = $("input[name=title]").val();
var details = $("input[name=details]").val();

data:{
       Code:title, 
       Chief:details
 },



 //So if you use this procedure we can insert data using below method,

\DB::table('posts')->insert([
     'title' => $request->input('title'), //$request->title
     'details' => $request->input('details'), //$request->details
]);
return response()->json(
     [
       'success' => true,
       'message' => 'Data inserted successfully'
     ]
);




