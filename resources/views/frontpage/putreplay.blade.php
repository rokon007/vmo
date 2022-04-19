@extends('frontpage.frontpage')


@section('title') 
 <title>Vimbiso | Profile</title>
         <meta name="description" content="vary good">
     <meta name="keywords" content="vimbiso">
   
@endsection 
@section('body') 
@if($message = Session::get('success'))
								<script>
window.location.href="/profile/{{Auth::user()->company_name}}"
</script>
								@endif
<div >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
     <div class="modal-header metallic-red-bg">
                <div class="d-flex justify-content-center ">
                    <h3 class="modal-title text-white text-center " id="exampleModalLongTitle">Replay to {{$rview->name}}'s review</h3>
                </div>
             <a href="/profile/{{Auth::user()->company_name}}">   <button type="button" class="close"  aria-label="Close"></a>
                <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
      <div class="modal-body">
	 
	  <form action="{{ url('replay/'.$rview->id) }}" method="post" class="form">
        @csrf
        @method('PUT')
       <div class="form-group d-flex flex-row">
					 <div class="col-lg-12 col-sm-12 p-0 pr-3">
					 <div class="form-group">
					 <label>Replay</label>
                     <textarea class="form-control" name="response" type="text" autofocus></textarea>
					 </div>
						</div>
						</div>
		
						
			
						
					 
                    
      </div>
      <div class="modal-footer">
	   <button type="submit" class="btn btn-primary" >Submit</button>
	   </form>
        <a href="/profile/{{Auth::user()->company_name}}">  <button type="button" class="btn btn-secondary" >Cancel</button></a>
       
      </div>
    </div>
  </div>
</div>
@endsection