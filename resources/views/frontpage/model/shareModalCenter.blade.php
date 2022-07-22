<!-- Modal -->
<div class="modal fade" id="shareModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
     <div class="modal-header">
                <div class="d-flex justify-content-center ">
                    <h3 class="modal-title text-center " id="exampleModalLongTitle">Review submited sucsessfully</h3>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
      <div class="modal-body">
	   <center> <h6 class="modal-title text-center "><i class="fas fa-share fa-1x ml-2">Share This Review on Social Media</i></h6></center>
       <div class="form-group d-flex flex-row">
					 <div class="col-lg-12 col-sm-12 p-0 pr-3">
					 <div class="form-group">
					        <center>    <tr>
								
								<?php
        $socialShare = Session::get('socialShare');
        if($socialShare)
        {
			?>	
                                    @foreach($socialShare as $key =>$value)
                                    <th><a href="{{$value}}"><i class="fab fa-{{$key}} fa-2x ml-2"></i>&#160;&#160;</a></th>
                                     @endforeach
								 <?php
          

        }
        ?>	 
                                </tr></center>
					 </div>
						</div>
						</div>
		
						
						
						
						
						
						
						
						
			
						
					 
                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>